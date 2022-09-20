// This script includes the automated chat Function
// Chat rates in ms per character
var CHAT_FAST = 15;
var CHAT_MEDIUM = 60;
var CHAT_SLOW = 300;

// chat variables
var offset = 0;
var text_flag = 0;

/////////////////// Chat bot ////////////////////////////////
//
function updateString(id,text,offset,c_delay,func,e_delay){
	var tmp = document.getElementById(id);
	var rev = text_flag;
	setTimeout(function(a,b){
			if(rev == text_flag){
				setText(a,b);
			}
		}, c_delay*(offset),tmp,text);
		
	if (typeof func !== 'undefined') {
		offset += e_delay/c_delay;
		setTimeout(func, c_delay*(offset));
	}
	else offset += 500/c_delay;
	
	return offset;
}

function updateText(id,text,offset,c_delay, func, e_delay){
	
	var rev = text_flag;
	var tmp = document.getElementById(id);
	for(i = 0; i < text.length; i++){
	
		setTimeout(function(a,b){
			if(rev == text_flag){
				setText(a,b);
			}
		}, c_delay*(i+offset),tmp,text[i]);
		
		if(text[i] == ',' || text[i] == ' '){
			offset = offset+500/c_delay/8;
		}
	}
	offset = offset + text.length;
		
	if(e_delay)
		offset += e_delay/c_delay;
	
	if (typeof func !== 'undefined') {		
		setTimeout(func, c_delay*(offset));
	}
	else offset += 500/c_delay;
	return offset;
// 	offset = 0;
}

function setText(div,text){
	div.innerHTML = div.innerHTML + text;
}

checkLoad();