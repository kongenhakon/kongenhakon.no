<?php

session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <br>
        <a id="link1" href="/snfl/">STORE NORSKE FALSKE LEKSIKON</a>
        <a id="link1" href="/clicker/">online clicker spill</a><br><br><br><br>
        <a id="link1" href="https:\\kongenhakon.github.io">GITHUB SIDE</a>
        <a id="link1" href="https:\\kongenhakon.no/matte">Matte</a>
        <a id="link1" href="https:\\kongenhakon.no/sunvsmoon.php">SUN VS MOON</a><br><br>
	    <h1>visninger til sammen:</h1><br>
        <div id="sfcdhs7n9rufb4rlp1te345jtnh92yc9t32"></div><script type="text/javascript" src="https://counter8.stat.ovh/private/counter.js?c=dhs7n9rufb4rlp1te345jtnh92yc9t32&down=async" async></script><noscript><a href="https://www.freecounterstat.com" title="hit counters"><img src="https://counter8.stat.ovh/private/freecounterstat.php?c=dhs7n9rufb4rlp1te345jtnh92yc9t32" title="hit counters" alt="hit counters"></a></noscript>
        <br>
        <br>
        <br>
        <br>
        <div>bruker:
            <br>
            <br>
            <div>bruker navn:
                <?php
                require "login.php";
                ?>
                <br>
            </div>
            <br>
            <br>
            <div>
                <?php  
                if (isset($_SESSION['username'])){
                    echo "clicker score: ";
                    require "config.php";
                    $conn = new mysqli($dbhost,$dbuser,$dbpass);
                    if ($conn->connect_error){
                        die("conn failed" . $conn->connect_error."<br>");
                    }
                    
                    $users = $conn->query("select brukernavn,epost,score from $dbnavn.brukere where brukernavn='".$_SESSION['username']."'");
                    
                    if ($users->num_rows > 0){
                        $user = $users->fetch_assoc();
                        echo $user['score'];
                    }
                    $conn->close();
                }
                ?>
            </div>
            <div>
                <?php
                require "xp.php";
                ?>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        
    </body>
</html>