// This script controls the form

var option_marital = ["Single","Married","Divorced","Domestic Partner","Married but Separated","Other"];
var option_accidents = ["No","Yes"];
var option_dui = ["No","DUI","FR 44","SR 22"];
var option_insurance = ["Uninsured","Allstate","State Farm","Geico","Progressive","Travelers","Hartford","USAA","Other"];
var option_insured = ["No","Yes"];
var option_rent = ["Own","Rent","Other"];	
var option_home = ["Condo/Apartment","Townhouse","House","Mobile Home"];
var option_credit = ["Excellent (850-720)","Above Average (720-620)","Average (620-520)","Bellow Average (520 or bellow)"];

var error_cnt = 0;

function checkActive(num){
	console.log('num '+num);	
	var err= 0;
	switch (num) {
		case 1:
			// User Information
			grp = document.getElementById('acf-contact-group').getElementsByTagName("input");
		
			for(let i = 0; i < grp.length; i++){
				if(grp[i].value == null || grp[i].value == ""){
					err = 1;
					break;
				}
					
			}
			break;
		case 2:
			console.log('BAM');
			if(v_year.value == null || v_year.value == "")
				err = 1;
			else if(v_year.value < 1920) { // min bound
				v_year.value = 2022;
				createErrorElement('Vehicle year reset due to invalid value (<1920)',0);
			}
			else if(v_year.value > 2100){ // max bound
				v_year.value = 2022;
				createErrorElement('Vehicle year reset due to invalid value (>2100)',0);
			}
			break;
		case 5:
			
			
			break;
	}	
	
	var div = document.getElementById('button1').classList;
	
	console.log('err '+err);		
	
	if((err == 0 && div.contains('active') == 0) || (err == 1 && div.contains('active') == 1)){
		div.toggle('active');
	}

	return err;
}

var form_ind = 1;

// Triggers error handling
function setForm(){
	var num = form_ind+1;
	
	clearErrors();
	var err = 0;
	console.log('num '+num);

	switch (num) {
		case 2: // User Information		
			// Need to create error message on top
			err = checkInput(grp1[0],'Please Input First Name',0); // First Name
			err = checkInput(grp1[1],'Please Input Last Name',err); // Last Name	
			err = checkInput(grp1[2],'Please Input Email',err); // Email Name
			err = checkInput(grp1[3],'Please Input Phone Number',err); // Phone Number
			err = checkInput(grp1[4],'Please Input Date of Birth',err); // DoB Name	
			err = checkInput(grp1[6],'Please Input Street Address',err); // Street Address
			err = checkInput(grp1[7],'Please Input City',err); // City
			err = checkZipcode(grp1[8],err); // Zipcode Name

			break;
		case 3: // Vehicles and Drivers Page

			err = checkInput(v_year,'Please Input Vehicle Year',0); // First Name
			break;

	}	
	// Check the button state
	var div = document.getElementById('button1').classList;
	console.log('err '+err);			
	if((err == 0 && div.contains('active') == 0) || (err == 1 && div.contains('active') == 1)){
		div.toggle('active');
	}	
	
	error_cnt = err;
	if(err > 0){
		return;
	}
			
	setFormState(num); // Set the form state
}

function setFormState(num){ // NEEDS WORK
	console.log('FormState: '+num + ' form_ind: '+form_ind);
	var flag = 0;
	if(num == 0){// Activate back
		num = form_ind;
		flag = 1;
	} 
	
	// Show/Hide back button
	if((flag == 0 && form_ind == 1) || (flag == 1 && form_ind == 2)){
		document.getElementById('id_back').classList.toggle('hidden');
	}

	// Set submit button
	if(flag == 0 && form_ind == 3)
		document.getElementById('button1').innerHTML = 'Submit';
	else if(flag == 1 && form_ind == 4)
		document.getElementById('button1').innerHTML = 'Next';
	
	// If Error Handle is ok
	switch (num) {
		case 2: // User to Vehicle Info Page
			getGroup(1).classList.toggle('acf-hidden'); // user info
			getGroup(2).classList.toggle('acf-hidden'); // Vehicle
			getGroup(3).classList.toggle('acf-hidden'); // Add vehicle
			break;
		case 3: // Vehicles to Driver History Page
			getGroup(2).classList.toggle('acf-hidden'); // Vehicle
			getGroup(3).classList.toggle('acf-hidden'); // Add vehicle
			getGroup(4).classList.toggle('acf-hidden'); // Driver History
			getGroup(5).classList.toggle('acf-hidden'); // Financial History
			break;
		case 4:  // Driver History to Insurance Coverage Page
			getGroup(4).classList.toggle('acf-hidden'); // Driver History
			getGroup(5).classList.toggle('acf-hidden'); // Financial History
			getGroup(6).classList.toggle('acf-hidden'); // Coverage and Liability
			break;
		case 5:
			document.getElementById('acf-form').submit();
			return;
			break;
	}
	
	// Store the state
	if(flag) form_ind = num - 1;
	else form_ind = num;		
	
	document.getElementById('id_page').innerHTML = form_ind + '/4'; // Set the page number
}

function checkZipcode(div,err){
	console.log('Checking Zipcode');
	let val = div.value;
	val = val.trim(); // Remove whitespace
	console.log('Checking Zipcode: ', val);
	var message = '';
	
	// Check 5-digit code
	if(val == ''){
		message = 'Please Input Zipcode';
	}
	else if(val.length == 5 && !isNaN(val)){
		return err;
	}
	else if(val.length == 11){
		tmp = val.split("-");
		console.log(tmp.length == 2 && tmp[0].length == 5 && !isNaN(tmp[0]));
		console.log(tmp[1].length == 5 && !isNaN(tmp[1]));
		if(tmp.length == 2 && tmp[0].length == 5 && !isNaN(tmp[0]) && tmp[1].length == 5 && !isNaN(tmp[1])){
		   	return err;
		}
	}
	else message = 'Please input a valid US based Zip Code with 12345 or 12345-12345 format.';
	 
	createErrorElement(message,err);
	return err+1;
}

// Set the input message
function checkInput(div,message,err){
	let val = div.value;
	if(val.trim() == ''){
		createErrorElement(message,err);
		return err+1;	
	}else{
		return err;
	}		
}

function createErrorElement(message,err){
// 	document.getElementById('acf-form').prepend(
// 	'<div class="acf-notice -error acf-error-message -dismiss">'+
// 		'<p>'+message+'</p><a href="#" class="acf-notice-dismiss acf-icon -cancel small"></a>'+
// 	'</div>');
	
	var newNode = document.createElement('div');
	newNode.id = 'error'+err;
	newNode.innerHTML = '<div class="acf-notice -error acf-error-message -dismiss">'+
		'<p>'+message+'</p><a onclick = "clearError('+err+')" href="#" class="acf-notice-dismiss acf-icon -cancel small"></a>'+
	'</div>';
	document.getElementById('acf-form').insertBefore(newNode, document.getElementById('acf-form').firstChild);
}

function clearErrors(){
	for(var i =0; i < error_cnt; i ++){
		if(!!document.getElementById('error'+i))
			document.getElementById('error'+i).remove();
	}
	error_cnt = 0;
}

function clearError(err){
	document.getElementById('error'+err).remove();
}

checkLoad();