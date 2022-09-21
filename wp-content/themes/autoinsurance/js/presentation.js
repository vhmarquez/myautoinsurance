// This is the intro presentation

var p_ind = 0;
var SLIDE_DELAY = 2000;
function setPresentation(){
	offset = 0;
	switch (p_ind) {
		case 0:
			offset = updateText('id_p1a','Is shopping for car insurance stressing you out?',offset,CHAT_MEDIUM,'',SLIDE_DELAY);
			updateText('id_p1b','Maybe I can help',offset,CHAT_MEDIUM,setPresentation,SLIDE_DELAY);
			break;	
		case 1:
			updateText('id_p2','At My Florida Auto Insurance, we make shopping for car insurance, as Easy as Possible',offset,CHAT_MEDIUM,setPresentation,SLIDE_DELAY);
			break;
		case 2:
			updateText('id_p3','I\'ll start by asking you a few questions',offset,CHAT_MEDIUM,setPresentation,SLIDE_DELAY);
			break;
		case 3:	
			updateText('id_p4','Helping you figure out what you need, such as how much bodily injury and personal liability.',offset,CHAT_MEDIUM,setPresentation,SLIDE_DELAY);
			break;
		case 4:
			updateText('id_p5','Then using statistical data, I\'ll connect you with the best fit for your given situation.',offset,CHAT_MEDIUM,setPresentation,SLIDE_DELAY);
			break;
		case 5:
			updateText('id_p6','This saves you both time and money.',offset,CHAT_MEDIUM,setPresentation,SLIDE_DELAY);
			break;
		case 6:
			offset = updateText('id_p7a','Apply now to receive your no obligation quote.',offset,CHAT_MEDIUM);
			updateText('id_p7b','-I think you’ll be pleasantly surprised with your experience.',offset,CHAT_MEDIUM,setPresentation,SLIDE_DELAY);
			break;
	}	
	
	if(p_ind > 0 && p_ind < 7){
	
		// If Error Handle is ok
		document.getElementById('id_presentation'+p_ind).classList.toggle('hidden');
		document.getElementById('id_presentation'+(p_ind+1)).classList.toggle('hidden');
	}
	else if(p_ind == 7){

		document.getElementById('id_b1').classList.toggle('active');
		
		setTimeout(function(){
			document.getElementById('id_b1').classList.toggle('active');
			document.getElementById('id_b2').classList.toggle('active');
		},2000);
		
		setTimeout(function(){
			document.getElementById('id_b2').classList.toggle('active');
			document.getElementById('id_b3').classList.toggle('active');
		},4000);
		
		setTimeout(function(){
			document.getElementById('id_b3').classList.toggle('active');
// 			document.getElementById('id_b4').classList.toggle('active');
		},6000);
		
// 		setTimeout(function(){
// 			document.getElementById('id_b4').classList.toggle('active');
// 			document.getElementById('id_step1').classList.toggle('active');
// 		},8000);
	}
	
	p_ind = p_ind+1;
}

function setPresentation1(){
	offset = 0;
	switch (p_ind) {
		case 0:
			offset = updateText('id_p7a','Apply now to receive your no obligation quote.',offset,CHAT_MEDIUM);
			updateText('id_p7b','-I think you’ll be pleasantly surprised with your experience.',offset,CHAT_MEDIUM,setPresentation1,SLIDE_DELAY);
			
			break;
	}	
	
	if( p_ind < 1){	
		// If Error Handle is ok
		document.getElementById('id_presentation'+1).classList.toggle('hidden');
		document.getElementById('id_presentation'+7).classList.toggle('hidden');
	}
	else{

		document.getElementById('id_b1').classList.toggle('active');
		
		setTimeout(function(){
			document.getElementById('id_b1').classList.toggle('active');
			document.getElementById('id_b2').classList.toggle('active');
		},2000);
		
		setTimeout(function(){
			document.getElementById('id_b2').classList.toggle('active');
			document.getElementById('id_b3').classList.toggle('active');
		},4000);
		
		setTimeout(function(){
			document.getElementById('id_b3').classList.toggle('active');
// 			document.getElementById('id_b4').classList.toggle('active');
		},6000);
		
// 		setTimeout(function(){
// 			document.getElementById('id_b4').classList.toggle('active');
// 			document.getElementById('id_step1').classList.toggle('active');
// 		},8000);
	}
	
	p_ind = p_ind+1;
}

checkLoad();