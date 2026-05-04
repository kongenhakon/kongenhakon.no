let users =[];


function get_users(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
        users = JSON.parse(this.responseText);
        let str ="";
        for (i=0;i<users.length;i++){
            str+=users[i].brukernavn + "  score: "+users[i].score + "<br><br>";
        }

        document.getElementById("leader_board").innerHTML =str;
    }
    xhttp.open("GET","users.php");
    xhttp.send();
}
get_users();


function pluss_score(){

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
        if (xhttp.status==401){
            alert("Du må logge inn!")
        }
        else if (xhttp.status>299 || xhttp.status<200){
            alert("Det sjedde en feil")
        }
    }
    xhttp.open("GET","score.php");
    xhttp.send();
}


setInterval(get_users,1000);