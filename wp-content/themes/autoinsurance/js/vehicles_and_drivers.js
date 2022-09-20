// This function contains the vehicle and drivers scripts
var num_drivers = 1;
var num_vehicles = 1;

// Post the server for the vehicle make
function getVehicleMakeById(id,extra){
	fetch('../wp-content/themes/autoinsurance/getVehicleMakeById.php', {
		method: 'POST',
		headers: {
			'Content-type': 'application/json'
		},
		mode: "same-origin",
		body: JSON.stringify(id)
	})
		.then(function(response) {
		console.log(response);
		return response.json();
	})
		.then(function(data) {
		data = data.split(",");
		console.log(data);

		for(let i = 1; i <= data.length; i++) {
			document.querySelector('#v_make'+extra+i).innerHTML = data[i-1];
		}
	})
		.catch((error) => {
		console.log(error);
		console.log('Make Not Found');
	});
}

// Post the server for the vehicle model
function getVehicleModelById(id,extra){
		
	fetch('../wp-content/themes/autoinsurance/getVehicleModelById.php', {
		method: 'POST',
		headers: {
			'Content-type': 'application/json'
		},
		mode: "same-origin",
		body: JSON.stringify(id)
	})
		.then(function(response) {
		console.log(response);
		return response.json();
	})
		.then(function(data) {
		data = data.split(",");
		console.log(data);
// 		document.querySelector('#v_model'+1).innerHTML = data[0];
		for(let i = 1; i <= data.length; i++) {
			document.querySelector('#v_model'+extra+i).innerHTML = data[i-1];
		}
	})
		.catch((error) => {
		console.log(error);
		console.log('Model Not Found');
	});
}

///////////////////// Driver Functions //////////////////////
var driver = 1;

// This function adds an additional driver to the form
function addDriver() {
	driver++;
	var div = document.createElement('div');
	div.id = 'driver'+driver;
	div.className  = 'grid new-driver';
	div.innerHTML = 	
		makeAdditionalCol('First Name','<input id = "id_dF'+driver+'" type="text" name="first_name'+driver+'" placeholder = "Additional Driver" value="" size="40" aria-required="true" aria-invalid="false">') +
		makeAdditionalCol('Last Name','<input id = "id_dL'+driver+'"  type="text" name="last_name'+driver+'" placeholder = "Additional Driver" value="" size="40" aria-required="true" aria-invalid="false">') +
		makeDeleteElement(1)+
		'<div id = "id_ed'+driver+'" class = "error padded margin"></div>';
	
	document.getElementById('drivers').appendChild(div);	
	
	document.getElementById("id_dF"+driver).addEventListener('change', function(){checkActive(2)});
	document.getElementById("id_dL"+driver).addEventListener('change', function(){checkActive(2)});
	checkActive(2);
}

var primary = 0;
function togglePrimary(num) {
	if (num != primary){
		document.getElementById('primary1').classList.toggle("hidden");
		document.getElementById('primary2').classList.toggle("hidden");
		document.getElementById('id_ed1').classList.toggle("hidden");
		primary = num;
		
		checkActive(2);
	}	
}

// Checks the driver input type
function checkDriver(id,err){
	console.log('driver '+id);
	// Check if the element exists
	element = document.getElementById('id_dF'+id);
	if (typeof(element) == 'undefined' || element == null){
		console.log('Undefined Error');
		return err;
	}
	
	let val = element.value;
	if(val.trim() == ''){
		document.getElementById('id_ed'+id).innerHTML = 'Please Insert First Name';
		return err+1;	
	}
	else if(document.getElementById('id_dL'+id).value.trim() == ''){
		document.getElementById('id_ed'+id).innerHTML = 'Please Insert Last Name';
		return err+1;	
	}
	else {
		document.getElementById('id_ed'+id).innerHTML = '';
		return err;
	}
}
/////////////////////// Vehicles ///////////////////////////
var vehicle = 1;
// Add additional vehicle
function addVehicle(){
	vehicle++;
	var div = document.createElement('div');
	div.id = 'vehicle'+vehicle;
	div.className  = 'grid new-driver';
	div.innerHTML = 		
		makeAdditionalCol('Vehicle Make',
						  				'<select name="auto_make" aria-required="true" id="autoMake'+vehicle+'" aria-invalid="false" onchange="getModels('+vehicle+',this.value)" required>'+
						  				'</select>',4) +
		makeAdditionalCol('Vehicle Model','<select name="auto_model" aria-required="true" aria-invalid="false" id="autoModel'+vehicle+'" disabled></select>',4) +
		makeAdditionalCol('Vehicle Year','<input type="number" name="auto_year"id="autoYear'+vehicle+'" min="1900" max="2099" step="1" value="2021" aria-required="true" aria-invalid="false" />',4)+
		makeDeleteElement(0)+
		'<div id = "id_ev'+vehicle+'" class = "error padded margin"></div>'	;
	
	document.getElementById('vehicles').appendChild(div);
	getVehicles();
	
	document.getElementById("autoMake"+vehicle).addEventListener('change', function(){checkActive(2)});
	document.getElementById("autoModel"+vehicle).addEventListener('change', function(){checkActive(2)});
	document.getElementById("autoYear"+vehicle).addEventListener('change', function(){checkActive(2)});
	checkActive(2);
}

// Get vehicles makes
function getVehicles(){
	fetch('../wp-content/themes/autoinsurance/get_vehicles.php', {
		method: 'POST',
		headers: {
			'Content-type': 'application/json'
		},
		mode: "same-origin",
		body: "1"
	})
		.then(function(response) {
		
		return response.json();
	})
		.then(function(data) {

		let autoMake = document.querySelector('#autoMake'+vehicle);
		autoMake.disabled = false;
		autoMake.innerHTML = '<option value="0">Select Vehicle Make</option>';
		
		for(let i in data) {
			autoMake.innerHTML += '<option value="' + data[i].make_id + '">' + data[i].make_name + '</option>';
		}
		
	})
		.catch((error) => {
		console.log('No models found')
	});
}

// Get vehicles model
function getModels(num,makeId){
	fetch('../wp-content/themes/autoinsurance/get_models.php', {
		method: 'POST',
		headers: {
			'Content-type': 'application/json'
		},
		mode: "same-origin",
		body: makeId
	})
		.then(function(response) {
		return response.json();
	})
		.then(function(data) {
		console.log('#autoModel'+num);
		let autoModel = document.querySelector('#autoModel'+num);
		autoModel.innerHTML = "";
		autoModel.disabled = false;
		for(let i in data) {
			autoModel.innerHTML += '<option value="' + data[i].model_id + '">' + data[i].model_name + '</option>';
		}
	})
		.catch((error) => {
		console.log('No models found')
	});
}

checkLoad();