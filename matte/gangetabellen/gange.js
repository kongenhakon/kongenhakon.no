function get_users(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
        users = JSON.parse(this.responseText);
        let str ="";
        for (i=0;i<users.length;i++){
            str+=users[i].brukernavn + " gange xp: "+users[i].gange_xp + "<br><br>";
        }

        document.getElementById("leader_board").innerHTML =str;
    }
    xhttp.open("GET","user.php");
    xhttp.send();
}
get_users();
function pick_num() {
    return Math.floor(Math.random() * 11);
}

let num_1 = pick_num();
let num_2 = pick_num();

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("tall").innerHTML = num_1 + " * " + num_2;
});

function gang() {
    return num_1 * num_2;
}

function sjekkSvar() {
    let userInput = document.getElementById("input").value;
    let correctAnswer = gang();

    if (parseInt(userInput) === correctAnswer) {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
            if (xhttp.status==401){
                alert("Du må logge inn!")
            }
            else if (xhttp.status>299 || xhttp.status<200){
                alert("Det sjedde en feil")
            }
        }
        xhttp.open("GET","scoreg.php");
        xhttp.send();
        location.reload()

    } else {
        alert("Feil, prøv igjen!");
    }
}

// Legg til event listener på input-feltet slik at brukeren kan trykke "Enter"
document.addEventListener("DOMContentLoaded", function () {
    let inputField = document.getElementById("input");
    if (inputField) {
        inputField.addEventListener("keypress", function(event) {
            if (event.key === "Enter") {
                sjekkSvar();
            }
        });
    } else {
        console.error("Elementet med ID 'input' ble ikke funnet.");
    }
});
setInterval(get_users,1000);