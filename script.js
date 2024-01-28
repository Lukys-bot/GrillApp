function toggleText(){
    let skrytyText = document.getElementById("skrytyText");

    if (skrytyText.style.display === "none")  {
        skrytyText.style.display = "block";
        
        if (skrytyText.style.display ==="block") {
            skrytyText2.style.display === "none"
        }
    }
    else {
        skrytyText.style.display = "none";
    }
}

function toggleText2(){
    let skrytyText = document.getElementById("skrytyText2");

    if (skrytyText2.style.display === "none")  {
        skrytyText2.style.display = "block";
    }
    else {
        skrytyText2.style.display = "none";
    }
}

/*document.getElementById('mainPage').addEventListener('click'

, function() {
 window.location.href = 'Introduction.php'
});*/


//

document.getElementById('email').addEventListener('blur', function() {
    validateEmail(this.value);
});

function validateEmail(email) {
    let emailInput = document.getElementById('email');
    let emailError = document.getElementById('emailError');
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (emailPattern.test(email)) {
        // Platná e-mailová adresa
        emailInput.style.border = '2px solid green';
        emailError.textContent = '';
    } else {
        // Neplatná e-mailová adresa
        emailInput.style.border = '2px solid red';
        emailError.textContent = 'napište správnou emailovou adresu';
    }
}


