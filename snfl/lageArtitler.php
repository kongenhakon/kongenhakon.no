<html>

  <head>

        <link rel="stylesheet" href="../styles.css">

  </head>

    <body>







<form action="lageArtitler.php" method = "POST">

  <label id="overskrift">overskrift:</label><br>

  <input type="text" id="overskriften" name="overskriften" placeholder="overskriften"><br>

  <label id="tekst">tekst:</label><br>

  <textarea name="tekst" placeholder="tekst" rows="20" cols="50" data-gramm_editor="false"></textarea><br>

  <input type="submit" value="Submit"><br>

  <input type="reset" value="reset"><br>

</form> 





<?php
$banede_iper = []; // Legg til IP-adresser som skal bannes, f.eks. ['123.456.789.000'].

if (isset($_POST['overskriften']) && $_POST['overskriften'] != "" && $_POST['tekst'] != "") {
    require "../config.php";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbnavn); // Pass på å legge til $dbnavn her.

    if ($conn->connect_error) {
        die("Tilkoblingen mislyktes: " . $conn->connect_error . "<br>");
    }

    // Sjekk om brukerens IP-adresse er bannet.
    if (in_array($_SERVER['REMOTE_ADDR'], $banede_iper)) {
        echo "Du er bannet";
    } else {
        // Lag SQL-spørringen for å sette inn data i databasen.
        $overskrift = $_POST['overskriften'];
        $tekst = $_POST['tekst'];
        $ip = $_SERVER['REMOTE_ADDR'];

        $sql = "INSERT INTO artikler (overskrift, tekst, ip) VALUES ('$overskrift', '$tekst', '$ip')";

        if ($conn->query($sql) === TRUE) {
            echo "Din artikkel har blitt lagret!";
        } else {
            echo "En feil oppstod: " . $conn->error;
        }
    }

    $conn->close();
}







  

?>



    <?php

    

    ?>

    <h1>lag en artikel</h1>

     <br>

     <br>

     <a href="../snfl/">tilbake til start</a>

    </body> 

    

    

</html>