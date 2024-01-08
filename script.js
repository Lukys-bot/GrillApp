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

document.getElementById('mainPage').addEventListener('click'

, function() {
 window.location.href = 'Introduction.php'
});


