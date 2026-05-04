<?php
require "../config.php";

session_start();

if (isset($_SESSION['username'])){
    $conn = new mysqli($dbhost,$dbuser,$dbpass);

    if ($conn->connect_error){
        die("conn failed" . $conn->connect_error."<br>");
    }
            
    $score = $conn->query("select score from ".$dbnavn.".brukere where brukernavn='".$_SESSION['username']."'");
    if ($score->num_rows > 0){
        $s = $score->fetch_assoc();
        echo $s['score'];
    } 
    else{
        echo 0;
    }

}else{
    http_response_code(401);
    echo 0;
}





?>
