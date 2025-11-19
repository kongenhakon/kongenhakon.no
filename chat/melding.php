<?php

session_start();
?><html>

  <head>

        <link rel="stylesheet" href="../style2.css">

  </head>

    <body>






<?php 
if (!isset($_SESSION['username'])){
    echo "Logg inn tulling";
}
?>
<form action="melding.php" method = "POST">

  <label id="tekst">tekst:</label><br>

  <textarea name="melding" placeholder="tekst" rows="20" cols="50" data-gramm_editor="false"></textarea><br>

  <input type="submit" value="Submit"><br>

  <input type="reset" value="reset"><br>

</form> 





<?php
$banede_iper = []; // Legg til IP-adresser som skal bannes, f.eks. ['123.456.789.000'].

if (isset($_SESSION['username']) && isset($_POST['melding']) && $_POST['melding'] != "") {
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
        $melding = $_POST['melding'];
        $bruker = $_SESSION['username'];

        $sql = "INSERT INTO chat (tekst, brukernavn) VALUES ( '$melding', '$bruker')";

        if ($conn->query($sql) === TRUE) {
            echo "Din melding er sendt!";
        } else {
            echo "En feil oppstod: " . $conn->error;
        }

        $conn->query("DELETE FROM chat
                    WHERE id NOT IN (
                        SELECT id
                        FROM (
                            SELECT id
                            FROM chat
                            ORDER BY id DESC
                            LIMIT 10
                        ) AS keep
                    );");

        
    }

    $conn->close();
}







  

?>



    <?php

    

    ?>


     <br>

     <br>

     <a href="../chat/">tilbake til start</a>

    </body> 

    

    

</html>