// This script contains the insurance selection

var num_option = 0;
var insurances = ["Allstate", "Geico", "State Farm", "Progressive", "The General"];
var insurance_img = ["allstate_logo.jpeg", "geico_logo.jpeg", "statefarm_logo.png", "progressive_logo.jpeg", "thegeneral_logo.jpeg"];
var insurance_header = ["allstate_banner.png", "geico_banner.jpg", "statefarm_banner.png", "progressive_banner.png", "thegeneral_banner.png"];
var insurance_text = [ // Insurance Info
	"A policy with Allstate® is more than just car insurance. It's personalized help from agents and innovative tools—like Drivewise®—that help keep you driving forward. Get a car insurance quote and learn why millions of households trust Allstate for their insurance needs.",
	"Everyone needs car insurance. Get a quote from a company that delivers affordable rates and personalized service when you need it. GEICO's Auto Insurance been saving people money for 85 years. We know a thing or two about cheap car insurance rates. We deliver a car insurance policy with exceptional coverage and best-in-class customer service, and that matters when you have an accident or are stuck on the side of the road. Get a fast and free car insurance quote to see everything GEICO has to offer.",
	"State Farm offers many coverage options, from auto insurance for teen drivers, or insurance protection for rental cars to insurance for sports cars and more. Get a free car insurance quote from the industry leader or learn about available policies.",
	"From Tallahassee to the tip of the Keys, when looking for dependable auto insurance in Florida, all roads lead to Progressive. Explore more on Florida's auto insurance requirements, optional coverages, and available discounts. We'll help you get a car insurance quote in Florida that best fits you and your budget.",
	"For nearly 60 years, we’ve made it our business to provide 5‑star coverage to everyday Americans. People are welcome here, even with less-than-perfect credit and driving records."
];
var insurance_agent = ['Hamid Tabibi','Enrique Perez','John Johnson','Flo', 'General Tom' ];
var insurance_quality = [8, 7, 6 , 5, 4];
var choice_array = [0,0,0];
var quotes = [0,0,0];
var ratings = [1,1,1];
var quote_increment = [0,0,0];

// Find the best insurance match
function getBestInsurance(){
	num_option = 0; // Reset the choice counter
	var cnt = 0;
	
	// Age 
	let str = document.getElementById('id_3').value;
	var age = Math.round(2021-(Number(str.substring(0, 4))+Number(str.substring(5, 7))/12+Number(str.substring(8, 10))/365));

	if(age > 45)
		cnt+=2;
	else if(age > 30)
		cnt+=1;
	
// 	// Address
// 	document.getElementById('id_address').innerHTML = 'Address: ' +
// 		document.getElementById('id_6').value +' '+ document.getElementById('id_7').value + ', ' 
// 		+ document.getElementById('id_8').value +' '+ document.getElementById('id_9').value;

	// Marital Status
	var tmp = Number(document.getElementById('id_10').value);
	if(tmp == 1 | tmp == 3)
		cnt += .75;

	// Accidents
	tmp = Number(document.getElementById('id_11').value);
	if(tmp == 0)
		cnt += .5;
	else
		cnt -= .5;
	
	// DUI
	tmp = Number(document.getElementById('id_12').value);
	if(tmp == 0)
		cnt += 1;
	else
		cnt -= 1;
	
// 	// Current Insurance
// 	tmp = document.getElementById('id_13').value

	// Insured More than a year
	tmp = Number(document.getElementById('id_14').value);
	if(tmp == 0 && document.getElementById('id_13').value > 0)
		cnt += 1;
	
	// Rent or own
	tmp = Number(document.getElementById('id_15').value);
	if(tmp == 0)
		cnt += 1;
	
	// Property Type
	tmp = Number(document.getElementById('id_16').value);
	if(tmp == 3)
		cnt += 1;
	
	// Credit Rating
	tmp = Number(document.getElementById('id_17').value);
	if(tmp == 0)
		cnt += 2;
	else if(tmp == 1)
		cnt += 1;
	else if(tmp == 3)
		cnt -= 1;
	else if(tmp == 3)
		cnt -= 2;
	
	// Coverage
	tmp = document.querySelector('input[name="coverage"]:checked').value;
	if(tmp == 1)
		cnt -= 1.5;
	if(tmp == 3)
		cnt += 1.5;
	
	if (cnt < 4)
		choice_array = [4,3,2];
	else if (cnt < 5)
		choice_array = [3,4,2];
	else if (cnt < 6)
		choice_array = [2,3,1];
	else if (cnt < 7)
		choice_array = [2,1,3];
	else if (cnt < 8)
		choice_array = [1,0,2];
	else
		choice_array = [0,1,2];

}


// Updates the UI to the new insurance
function updateNewInsurance(){
	// Change the UI to Insurance Images
	document.getElementById('id_match_img').src = '/wp-content/themes/autoinsurance/images/Insurance_Profiles/'+insurance_img[choice_array[num_option]];
	document.getElementById('id_match_title').innerHTML = '<b>' + insurances[choice_array[num_option]] +'</b>';	
	document.getElementById('id_match_text').innerHTML = insurance_text[choice_array[num_option]];	
	document.getElementById('id_match_banner').src = '/wp-content/themes/autoinsurance/images/Insurance_Profiles/'+insurance_header[choice_array[num_option]];	
}

// This function updates the UI to the Next Insurance
function setNextInsurance(){
	offset = 0;
	
	updateNewQuote();
	
	num_option += 1;
	if(num_option < 4){ //  If below the max
		
		// Small talk about the call
		offset = updateString('id_search','<br><br>',offset,CHAT_FAST);
		offset = updateText('id_search','I see that ',offset,CHAT_FAST);
		offset = updateString('id_search','<b>'+insurances[choice_array[num_option-1]]+'</b>',offset,CHAT_FAST);
		offset = updateText('id_search',' quoted you at $'+quotes[num_option-1] ,offset,CHAT_FAST);
		
		var tmp = quote_increment[num_option-1];
		console.log('QUOTE Increment: '+tmp);
		if(tmp == 0)
			offset = updateText('id_search',' monthly' ,offset,CHAT_FAST);
		else if(tmp == 1)
			offset = updateText('id_search',' every 3 months' ,offset,CHAT_FAST);
		else if(tmp == 2)
			offset = updateText('id_search',' every 6 months' ,offset,CHAT_FAST);
		else if(tmp == 3)
			offset = updateText('id_search',' every 12 months' ,offset,CHAT_FAST);	
		
		tmp = ratings[num_option-1]; // current rating
		console.log('Rating: '+tmp);
		if (tmp > 4)
			offset = updateText('id_search',', and that you had an exceptional experience.',offset,CHAT_FAST);
		else if (tmp > 2)
			offset = updateText('id_search',', and that you had a '+tmp+' star experience.',offset,CHAT_FAST);
		else
			offset = updateText('id_search',', and that you had a negative experience. I\'m sorry about that, and I will address this issue.',offset,CHAT_FAST);
		
		offset = updateString('id_search','<br><br>',offset,CHAT_FAST);
		offset = updateText('id_search','Let\'s see if I can find you a better deal.',offset,CHAT_FAST);
		
		// Set New Inssurance text
		offset = updateText('id_search',' How about ',offset,CHAT_FAST);
		offset = updateString('id_search','<b>'+insurances[choice_array[num_option]]+'</b>?',offset,CHAT_FAST);
		
// 		// Would you like to call text
// 		offset = updateString('id_search','<br><br>',offset,CHAT_FAST);
// 		offset = updateText('id_search','Would you like to call ',offset,CHAT_FAST);
// 		offset = updateString('id_search','<b>'+insurances[choice_array[num_option]]+'</b>? ',offset,CHAT_FAST);
// 		offset = updateText('id_search','And don\'t worry, if it doesn\'t work, we\'ll keep shopping around.',offset,CHAT_FAST);
		
		updateNewInsurance();
	}
	
}

function updateNewQuote(){
	console.log('UPDATING QUOTE');
	let div = document.getElementById('id_quotes_wrapper');
	var star = '&#9733;';
	if(num_option == 0)
		div.innerHTML = 
			'<div class = "row border active">'+
				'<div class = "item big">'+
					'Insurance Provider'+
				'</div>'+
				'<div class = "item small">'+
					'Monthly'+
				'</div>'+
				'<div class = "item small">'+
					'3 Month'+
				'</div>'+
				'<div class = "item small">'+
					'6 Month'+
				'</div>'+
				'<div class = "item small">'+
					'Annually'+
				'</div>'+
				'<div class = "item small">'+
					'Rating' +
				'</div>'+
				'<div class = "item small">'+
					'Call' +
				'</div>'+
			'</div>';
	
	div.innerHTML += 
			'<div class = "row border">'+
				'<div class = "item big">'+
					'Progressive'+
				'</div>'+
				'<div class = "item small">'+
					'$100'+
				'</div>'+
				'<div class = "item small">'+
					'$300'+
				'</div>'+
				'<div class = "item small">'+
					'$600'+
				'</div>'+
				'<div class = "item small">'+
					'$1200'+
				'</div>'+
				'<div class = "item small star">'+
					star + star + star +
				'</div>'+
				'<div class = "item small">'+
					'<span class="material-icons call" title = "Call Progressive?">call</span>' +
				'</div>'+
			'</div>';
	
	div.innerHTML += 
			'<div class = "row border">'+
				'<div class = "item big">'+
					'Allstate'+
				'</div>'+
				'<div class = "item small">'+
					'$75'+
				'</div>'+
				'<div class = "item small">'+
					'$225'+
				'</div>'+
				'<div class = "item small">'+
					'$450'+
				'</div>'+
				'<div class = "item small">'+
					'$900'+
				'</div>'+
				'<div class = "item small star">'+
					star +star +star +star +star +
				'</div>'+
				'<div class = "item small">'+
					'<span class="material-icons call" title = "Call Allstate?">call</span>' +
				'</div>'+
			'</div>';
	
	var tmp = quote_increment[num_option];
	
	if(tmp == 0)
		tmp = 12*quotes[num_option];
	else if(tmp == 1)
		tmp = 4*quotes[num_option];
	else if(tmp == 2)
		tmp = 2*quotes[num_option];
	else if(tmp == 3)
		tmp = quotes[num_option];
	
	var s = star;
	for(let i = 1; i < ratings[num_option]; i++)
		s+=star;
	
	div.innerHTML += 
		'<div class = "row border">'+
			'<div class = "item big">'+
				insurances[choice_array[num_option]] +
			'</div>'+
			'<div class = "item small">'+
				'$'+tmp/12 +
			'</div>'+
			'<div class = "item small">'+
				'$'+tmp/6 +
			'</div>'+
			'<div class = "item small">'+
				'$'+tmp/4 +
			'</div>'+
			'<div class = "item small">'+
				'$'+tmp +
			'</div>'+
			'<div class = "item small star">'+
				 s +
			'</div>'+
			'<div class = "item small">'+
				'<span class="material-icons call" title = "Call '+insurances[choice_array[num_option]]+'?">call</span>' +
			'</div>'+
		'</div>';
}



























checkLoad();