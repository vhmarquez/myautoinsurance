//  This script modifies the GUI to make a more interactive experience

// Main File Path
var path = '/wp-content/themes/autoinsurance/js/';
var load_trigger = 0; // Load state

// Load the files
loadFun(path + 'form_state.js');
loadFun(path + 'chat_bot.js');
loadFun(path + 'presentation.js');

document.addEventListener("DOMContentLoaded", function() {
    checkLoad();
});

var grp1 = getGroup(1).getElementsByTagName("input");
var v_year = document.getElementById('id_vehicle_year').lastElementChild.lastElementChild.lastElementChild;

function startApp() {
    console.log((new Date()).toUTCString());

    setPresentation1();

    // hide values
    for (i = 2; i <= 6; i++) {
        getGroup(i).classList.toggle('acf-hidden');
    }

    document.getElementsByClassName('acf-form-submit')[0].classList.toggle('acf-hidden');

    var grp = getGroup(1).getElementsByClassName('acf-field');

    // Toggle UI to jons
    for (i = 0; i < grp.length; i++) {
        grp[i].classList.toggle('acf-jon');
    }

    // Add change listener
    for (let i = 0; i < grp.length; i++) {
        grp[i].addEventListener('change', function() {
            checkActive(1)
        });
    }

    v_year.addEventListener('change', function() {
        checkActive(2)
    });

    // Additional Drivers table
    num_drivers = 0;
    (getGroup(3).getElementsByTagName("table")[0]).classList.toggle('acf-hidden'); // Add vehicle

    (getGroup(3).getElementsByTagName("table")[0]).parentNode.lastElementChild.firstElementChild.addEventListener('click', function() {
        if (num_drivers == 0) // Reveal on first click
            (getGroup(3).getElementsByTagName("table")[0]).classList.toggle('acf-hidden');

        num_drivers = num_drivers + 1; // Increment the drivers
    });

    // reroute the enter key
    var div = document.createElement("button");
    div.type = "submit";
    div.disabled = true;
    div.style = "display: none";
    document.getElementById('acf-form').prepend(div);
    document.getElementById('acf-form').addEventListener("keyup", function(event) {
        // Number 13 is the "Enter" key on the keyboard
        if (event.keyCode === 13) {
            // Cancel the default action, if needed
            event.preventDefault();
            // Trigger the button element with a click
            setForm();
        }
    });

    // Preset contact info for testing values
    grp1[0].value = 'First Name';
    grp1[1].value = 'Last Name';
    grp1[2].value = 'helloworld@gmail.com';
    grp1[3].value = '(555) 555-5555';
    grp1[4].value = '20220101';
    grp1[5].value = 'January 01, 2022';
    grp1[6].value = 'Boardwalk';
    grp1[7].value = 'Monopoly';
    grp1[8].value = '99999';

    checkActive(1); // Initialize the Next button

    return

    // 	checkActive(1);
    // 	checkActive(2);

    // Set the change listeners
    document.getElementById("autoMake1").addEventListener('change', function() { checkActive(2) });
    document.getElementById("autoModel1").addEventListener('change', function() { checkActive(2) });
    document.getElementById("autoYear1").addEventListener('change', function() { checkActive(2) });

    document.getElementById("id_dF1").addEventListener('change', function() { checkActive(2) });
    document.getElementById("id_dL1").addEventListener('change', function() { checkActive(2) });

}

// Load javascript function
function loadFun(filename) {
    var script = document.createElement('script');
    script.src = filename;
    var head = document.getElementsByTagName("head")[0];
    head.appendChild(script);
}

// Each file checks in when loaded, when all are loaded up start the app
function checkLoad() {
    load_trigger += 1;

    if (load_trigger == 4) {
        startApp();
    }
}

// Main form groupings
function getGroup(ind) {
    console.log('getGroup: ' + ind);
    if (ind == 1)
        id = document.getElementById('acf-contact-group');
    else if (ind == 2)
        id = document.getElementById('acf-vehicle-information-group');
    else if (ind == 3)
        id = document.getElementById('acf-add-vehicles');
    else if (ind == 4)
        id = document.getElementById('acf-primary-driver-group');
    else if (ind == 5)
        id = document.getElementById('acf-financial-information');
    else if (ind == 6)
        id = document.getElementById('acf-coverage-and-liability');

    return id;
}