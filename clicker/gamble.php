<?php
require "../config.php";
session_start();



$conn = new mysqli($dbhost,$dbuser,$dbpass);
if ($conn->connect_error){
    die("conn failed" . $conn->connect_error."<br>");
}
if (isset($_SESSION['username'])){
    $input = $_GET["input"];
    $sucsess=false;
    if(random_int(0,1)==1){
        $sucsess=true;
    }
    
    if($conn->query("update $dbnavn.brukere set score=score".($sucsess?"+":"-").$input." where brukernavn='".$_SESSION['username']."'")===TRUE){
    }
    
    echo $sucsess;
}else{
    http_response_code(401);
    echo false;
}



$conn->close();
?>