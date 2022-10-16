// This file Monitors user duration
var field_contacts = ["firstname","lastname","email","phone","DoB","undefined","street","city","zipcode"];
var field_driver = ["accidents","dui","current_insurance","insured_more_than_one_year"];
var field_financial = ["rent_or_own","property_type","credit"];
var field_bi = ["Low", "Medium","High"];

var DT = 5; // Time offset in seconds
var duration = 0; // Total Duration
var ip_addr = '';

// fetch("http://localhost:8000"+path+"get_ip.php", {
//     method: "POST",
//     headers: {
//         "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
//     },
//     body: ``,
//     })
//     .then((response) => response.text())
//     .then((res) => (ip_addr = res));

function setTracker(){
    addTrack();
    console.log(ip_addr+ ': '+"Total Time " + duration);
    setTimeout(function(){
        duration += 5;
        
        setTracker();
    }, DT*1000);
}

function addTrack(){
    // Contacts grp
    grp = document.getElementById('acf-contact-group').getElementsByTagName("input");
    params = '';
    for(let i = 0; i < grp.length; i++){
        if(grp[i].value != null && grp[i].value != "" && field_contacts[i] != 'undefined'){
            params += '&'+field_contacts[i]+'='+grp[i].value;
        }            
    }

    // Select statements
    if(form_ind > 2){
        grp = document.getElementById('acf-primary-driver-group').getElementsByTagName('select');
        for(let i = 0; i < grp.length; i++){
            params += '&'+field_driver[i]+'='+grp[0].options[grp[0].selectedIndex].text;          
        }
    
        grp = document.getElementById('acf-financial-information').getElementsByTagName('select');
        for(let i = 0; i < grp.length; i++){
            params += '&'+field_financial[i]+'='+grp[0].options[grp[0].selectedIndex].text;          
        }
    }


    // grp = document.getElementById('acf-coverage-and-liability').getElementsByTagName('li');
    // console.log(grp[i].getElementsByClassName('selected'));
    if(form_ind > 3){
        grp = document.getElementById('acf-coverage-and-liability').getElementsByTagName('li');        

        for(let i = 0; i < grp.length; i++){
            // console.log(grp[i].getElementsByClassName('selected'));
            if(grp[i].getElementsByClassName('selected').length>0){
                params += '&'+'current_bi'+'='+field_bi[i];   
            }
                    
        }
    }
    console.log('PARAMS: '+params);
    fetch(path+"track.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
        },
        body: `ipaddr=${ip_addr}&duration=${duration}&page=${form_ind}`+params,
      })
      .then((response) => response.text())
      .then((res) => (console.log('Track Updated '+ res)));

}

checkLoad();