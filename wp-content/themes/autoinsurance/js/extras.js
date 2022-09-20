// This contains extra functions

function toDay(d) {
	let num = Number(d);

	if(d == 1 || d == 21 || d == 31)
		return d + 'st';
	
	if(d == 2 || d == 22)
		return d + 'nd';
	
	if(d == 3 || d == 23)
		return d + 'rd';

	return d + 'th';

}

function toMonth(m){
	
	switch (Number(m)) {
		case 1: 	
			return 'January';
			break;
		case 2: 	
			return 'February';
			break;
		case 3: 		
			return 'March';
			break;
		case 4: 	
			return 'April';
			break;
		case 5: 	
			return 'May';
			break;
		case 6: 		
			return 'June';
			break;
		case 7: 	
			return 'July';
			break;
		case 8: 	
			return 'August';
			break;
		case 9: 
			return 'September';
			break;
		case 10: 	
			return 'October';
			break;
		case 11: 		
			return 'November';
			break;
		case 12: 	
			return 'December';
			break;
	}
}

checkLoad();