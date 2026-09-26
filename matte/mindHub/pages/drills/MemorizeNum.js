var time = 20;
var started = false;
var counter = 0;
var timerID;
var counterRunning = false;
var counterDone = false;

var selectedThings = [];
var userAnswers = [];

var things = [
    "0","1","2","3","4","5","6","7","8","9"
];






function getRandomThings() {
    var shuffled = [...things].sort(() => 0.5 - Math.random());
    return shuffled.slice(0, 10);
}


function Next() {
    if (!counterRunning && !counterDone) {
        if (!started) {
            started = true;
            document.getElementById("NextButton").innerHTML = "Next";
            selectedThings = getRandomThings();
            document.getElementById("selected").innerHTML="";
            document.getElementById("userInput").style.display = 'none'; 
            document.getElementById("submitButton").style.display = 'none'; 
        }
        
        counter++;
        document.getElementById("thing").innerHTML = selectedThings[counter-1];
        document.getElementById("counter").innerHTML = counter;

        if (counter >= 10) {
            counter = 0;
            time = 20;

            counterRunning = true;
            clearInterval(timerID);
            timerID = setInterval(timer, 1000);
        }
    }else if (counterDone) {
       
    }
}

function timer() {
    time--;

    document.getElementById("thing").innerHTML = time;
    

    if (time <= 0) {
        clearInterval(timerID);
        timerID = null;

        document.getElementById("thing").innerHTML = "Time's up!";
        time = 20;
        setTimeout(function() {
            document.getElementById("thing").innerHTML = "Write down the numbers you remember!";
            counterRunning = false;
            counterDone = true;
            document.getElementById("userInput").style.display = 'block'; 
            document.getElementById("submitButton").style.display = 'block'; 
        }, 1000);
    }
}

function words_str(wordList){
    var str="Things: ";
    for(var i=0; i<wordList.length; i++){
        if (i==0){
            str=str+wordList[i];
        }else{
            str=str+', '+wordList[i];
        }
        
    }
    return str;
}

function submitAnswer(){
    var userInput = document.getElementById("userInput").value.trim();
    if (userInput === "") {
        return;
    }

    userAnswers.push(userInput);
    document.getElementById("userInput").value = "";

    if (userAnswers.length >= 10) {
        var score = getScore(userAnswers,selectedThings);
        var words = words_str(selectedThings);
        document.getElementById("userInput").style.display='none';
        document.getElementById("submitButton").style.display='none';
        document.getElementById("thing").innerHTML=score+"/10"
        document.getElementById("NextButton").innerHTML="Restart"
        document.getElementById("selected").innerHTML=words
        started=false;
        counterDone=false;
        return;
    } 
}   

function getScore(userAnswers, selectedThings) {
    var score = 0;

    for (var i = 0; i < userAnswers.length; i++) {
        if (userAnswers[i].trim().toLowerCase() === selectedThings[i].trim().toLowerCase()) {
                score++;
        }
    }

    return score;
}



document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("userInput").style.display = 'none'; 
    document.getElementById("submitButton").style.display = 'none'; 
    document.getElementById("NextButton").addEventListener("click", function() {
        Next();
    });
});