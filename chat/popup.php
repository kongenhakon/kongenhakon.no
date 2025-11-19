<?php

require "../config.php";

$conn = new mysqli($dbhost,$dbuser,$dbpass);

if ($conn->connect_error){

    die("conn failed" . $conn->connect_error."<br>");

}


$meldinger = $conn->query("select * from ".$dbnavn.".chat ORDER BY id desc");



if ($meldinger->num_rows > 0){

    while ($melding = $meldinger->fetch_assoc()){

        ?>

        <div class="melding">

            <h3><?php echo $melding['brukernavn'];?>:</h3>

            <p><?php echo nl2br($melding['tekst']);?></p>

        </div>
        <br/>
        <br/>
        <br/>

        

        <?php

    }

}

$conn->close();