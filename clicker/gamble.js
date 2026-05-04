
let score = 0;

function get_score(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
        if (xhttp.status==401){
            alert("Du må logge inn!")
        }
        else if (xhttp.status>299 || xhttp.status<200){
            alert("Det sjedde en feil")
        }
        score = this.responseText;



    }
    xhttp.open("GET","get_score.php");
    xhttp.send();
}

get_score();




function gamble(){
    const userInput = parseInt(prompt("you have "+score+" clicks How much do you want to play for? "));
    if(!isNaN(userInput)){
        if(userInput<=score && userInput>=0){
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function(){
                if (xhttp.status==401){
                    alert("Du må logge inn!")
                }
                else if (xhttp.status>299 || xhttp.status<200){
                    alert("Det sjedde en feil")
                }
                let sucsess = this.responseText;

                get_score()

            
                if(sucsess){
                    alert("you doubled: "+userInput+" into "+(userInput*2))
                }else{
                    alert("you lose "+userInput)
                }


            }
            xhttp.open("GET","gamble.php?input="+userInput);
            xhttp.send();
        }else{
            alert("you are too poor!")
        }
    }else{
        alert("that is not a valid number")
    }
}

function update_score(){
    let label = document.getElementById("score")
    get_score()
    label.textContent="score: "+ score
}
setInterval(update_score, 1000)