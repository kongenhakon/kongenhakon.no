<?php

require "../config.php";

$conn = new mysqli($dbhost,$dbuser,$dbpass);

if ($conn->connect_error){

    die("conn failed" . $conn->connect_error."<br>");

}


$artikler = $conn->query("select * from ".$dbnavn.".artikler ORDER BY id desc");



if ($artikler->num_rows > 0){

    while ($artikel = $artikler->fetch_assoc()){

        ?>

        <div class="artikel">

            <h1><?php echo $artikel['overskrift'];?></h1>

            <p><?php echo nl2br($artikel['tekst']);?></p>

        </div>

        

        <?php

    }

}

$conn->close();