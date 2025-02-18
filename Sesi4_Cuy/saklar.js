function saklar(action, lamp) {
    let toggle1 = document.getElementById("default-toggle1");
    let toggle2 = document.getElementById("default-toggle2");
    let toggle3 = document.getElementById("default-toggle3");

    let lampu1 = document.getElementById("lampu1");
    let lampu2 = document.getElementById("lampu2");
    let lampu3 = document.getElementById("lampu3");
    // console.log('Testing', toggle.checked);
    if (toggle1.checked) {
        console.log('Dinyalakan');
        lampu1.src = "assets/images/on.gif";
    } else {
        console.log('Dimatikan');
        lampu1.src = "assets/images/off.gif";
    }
    if (toggle2.checked) {
        console.log('Dinyalakan');
        lampu2.src = "assets/images/on.gif";
    } else {
        console.log('Dimatikan');
        lampu2.src = "assets/images/off.gif";
    }
    if (toggle3.checked) {
        console.log('Dinyalakan');
        lampu3.src = "assets/images/on.gif";
    } else {
        console.log('Dimatikan');
        lampu3.src = "assets/images/off.gif";
    }

    
    
    
    if(action == 'on') {
        if (lamp == 1 ) {
            lampu1.src = "assets/images/on.gif";
        } 
        if (lamp == 2 ) {
            lampu2.src = "assets/images/on.gif";
        }
        if (lamp == 3 ) {
            lampu3.src = "assets/images/on.gif";
        }
       

    } 
    if(action == 'off') {
        if (lamp == 1 ) {
            lampu1.src = "assets/images/off.gif";
        }
        if (lamp == 2 ) {
            lampu2.src = "assets/images/off.gif";
        }
        if (lamp == 3 ) {
            lampu3.src = "assets/images/off.gif";
        }
        

    }
    
}