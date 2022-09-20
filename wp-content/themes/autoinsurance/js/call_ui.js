// This script includes the phone call UI
function toggleCallScreen(){
	
	// Swap screen
	document.getElementById('id_screen').classList.toggle('hidden');
	document.getElementById('masthead').classList.toggle('hidden');
	document.getElementsByTagName('body')[0].classList.toggle('overflow');
		
}

var mCalling = false; // Call state 0 is not calling, 1 is calling
var tmp_loading = 0; // Dummy variable to simulate loading
var audio_hangup = new Audio("/wp-content/themes/autoinsurance/images/call_end.mp3"); // buffers automatically when created
var audio_pickup = new Audio("/wp-content/themes/autoinsurance/images/phone_pick_up.wav"); // buffers automatically when created
var audio_call = new Audio("/wp-content/themes/autoinsurance/images/cell-phone-vibrate-1.wav"); // buffers automatically when created
audio_call.loop = true;
var DOTS_DELAY = 2700;

// State 1: Active Call UI and start calling
// State 2: Answer Call
// State 3: End Call
// State 4: Exit Survey
// This function controls the 4 call states
function setCallState(num){
	setCallState1(num);
	return;
	console.log('Callstate: '+num);
	switch(num){
		case 1: // Activate the call
			
			toggleCallScreen();
			document.getElementById('id_callstate1').classList.toggle('hidden');
			mCalling = true;
			
			// Connect call function prototype
			audio_call.play();
			document.getElementById('id_video_footer').classList.toggle('loading');	// Toggle the loading class		
			document.getElementById('id_end_call').classList.toggle('shaking');
			
			document.getElementById('id_video_footer').innerHTML = ' '; // Clear text		
			offset = 0;
			
			// Dots Function
			mCalling = true;
			setCallDots();
			
			setTimeout(function(){
				setCallState(2); // Start Call
			}, 3000);
			
			break;
		case 2: // Start Call
			
			if(!mCalling) // Check if call was canceled
				return;
			
			stopCalling();	// Stop  the ringing		
			audio_pickup.play();

			// Set the Text
			offset = 0;
			offset = updateText('id_video_footer','Hello, I am ',offset,CHAT_MEDIUM);
			offset = updateString('id_video_footer','<b>'+insurance_agent[choice_array[num_option]] +'</b>',offset,CHAT_MEDIUM);
			offset = updateText('id_video_footer',' with ',offset,CHAT_MEDIUM);
			offset = updateString('id_video_footer','<b>'+insurances[choice_array[num_option]] +' Auto Insurance</b>',offset,CHAT_MEDIUM);
			offset = updateText('id_video_footer',' and it is my pleasure to serve you.',offset,CHAT_MEDIUM);	
			
			break;
		case 3: // End Call
			
			if(!mCalling){
				document.getElementById('id_callstate1').classList.toggle('hidden');
				document.getElementById('id_callstate2').classList.toggle('hidden');
			}
			else {
				stopCalling();
				toggleCallScreen();
			}
			audio_hangup.play();
			break;
		case 4: // Close Survey
			
			// Close Survey
			document.getElementById('id_callstate2').classList.toggle('hidden');
			toggleCallScreen();
			
			// Clean the Survey
			quotes[num_option] = document.getElementById('id_quoted_input').value;
			quote_increment[num_option] = document.getElementById('id_quote_increment').value;
			document.getElementById('id_quoted_input').value = '';
			
			for(let i = 0; i < 5; i++){
				if((document.getElementsByName('rating'))[i].checked){
					(document.getElementsByName('rating'))[i].checked = false;
					ratings[num_option] = 5-i;
					break;
				}
			}				
			
			// Update the next insurance
			setNextInsurance();
			
			break;
	}

}

function setCallState1(num){
	console.log('Callstate: '+num);
	
	switch(num){
		case 1: // Activate the call
			if(mCalling)
				return;
			toggleCallScreen();
			document.getElementById('id_callstate1').classList.toggle('hidden');
			mCalling = true;
			
			// Connect call function prototype
			audio_call.play();
			document.getElementById('id_video_footer').classList.toggle('loading');	// Toggle the loading class		
			document.getElementById('id_end_call').classList.toggle('shaking');
			
			document.getElementById('id_video_footer').innerHTML = ' '; // Clear text		
			offset = 0;
			
			// Dots Function
			mCalling = true;
			setCallDots();
			
			setTimeout(function(){
				setCallState(2); // Start Call
			}, 3000);
			
			break;
		case 2: // Start Call
			
			if(!mCalling) // Check if call was canceled
				return;
			
			stopCalling();	// Stop  the ringing		
			audio_pickup.play();
			
			
			break;
		case 3: // End Call
			
			if(mCalling)
				stopCalling();
			document.getElementById('id_callstate1').classList.toggle('hidden');
			toggleCallScreen();
				
			audio_hangup.play();
			break;
	}

}

function stopCalling(){
	
	mCalling = false;
	audio_call.pause();
	document.getElementById('id_video_footer').classList.toggle('loading');
	document.getElementById('id_end_call').classList.toggle('shaking');
	document.getElementById('id_video_footer').innerHTML = '';
	
}

// This function is for the calling dots to check if the function has been exited
function checkCallText(c_delay){
	if(c_delay == CHAT_SLOW && !mCalling)
		return false;
	else return true;
}

function setCallDots(){
	console.log('DOTS');
	if(mCalling)
	updateText('id_video_footer','. . .',offset,CHAT_SLOW, function() { setCallDots(); },DOTS_DELAY); // Loading text
}

function toggleMuteButton(){
	var div = document.getElementById('id_mute');
	
	if(div.classList.contains('active') == 0){
		div.innerHTML = 'mic_off';
	}else {
		div.innerHTML = 'mic';
	}

	div.classList.toggle('active');
	
}

function toggleVolumeButton(){
	var div = document.getElementById('id_volume');
	
	if(div.classList.contains('active') == 0){
		div.innerHTML = 'volume_off';
	}else {
		div.innerHTML = 'volume_up';
	}

	div.classList.toggle('active');
	
}

function toggleVideoButton(){
	var div = document.getElementById('id_video');
	
	if(div.classList.contains('active') == 0){
		div.innerHTML = 'videocam_off';
	}else {
		div.innerHTML = 'videocam';
	}

	div.classList.toggle('active');
	
}

function setProfileView(){
	toggleCallScreen();
	document.getElementById('id_callstate3').classList.toggle('hidden');
	
}

function setQuotesView(){
	toggleCallScreen();
	document.getElementById('id_callstate4').classList.toggle('hidden');
	
}

checkLoad();