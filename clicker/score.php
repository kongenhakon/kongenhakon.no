<?php
require "../config.php";
session_start();
$conn = new mysqli($dbhost,$dbuser,$dbpass);
if ($conn->connect_error){
    die("conn failed" . $conn->connect_error."<br>");
}
if (isset($_SESSION['username'])){
    if($conn->query("update $dbnavn.brukere set score=score+1 where brukernavn='".$_SESSION['username']."'")===TRUE){
    }
}else{
    http_response_code(401);
}




$conn->close();
?>