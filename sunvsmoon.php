<html>
    <head>
    <link rel="stylesheet" href="style3.css">    
    <head>
    <body><?php
        
        require "config.php";

        $conn = new mysqli($dbhost,$dbuser,$dbpass);

        if ($conn->connect_error){

            die("conn failed" . $conn->connect_error."<br>");

        }

        if(isset($_GET['sun'])){
            if ($conn->query("update ".$dbnavn.".params set value=value+1 where `key`='sunvsmoon_sun'") === TRUE) {
            } else {
                echo "En feil oppstod: " . $conn->error;
            }
        }

        
        if(isset($_GET['moon'])){
            if ($conn->query("update ".$dbnavn.".params set value=value+1 where `key`='sunvsmoon_moon'") === TRUE) {
            } else {
                echo "En feil oppstod: " . $conn->error;
            }
        }

        $sun= $conn->execute_query("select value from ".$dbnavn.".params where `key`='sunvsmoon_sun'")->fetch_column();
        $moon=$conn->execute_query("select value from ".$dbnavn.".params where `key`='sunvsmoon_moon'")->fetch_column();
        ?>
        <div id="sun"><?php
        echo "sun: $sun";
        ?></div>
        <br>
        <br>
        <br>
        <br>
        <a id="link1" href="sunvsmoon.php?sun=TRUE">sun</a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div id="moon"><?php
        echo "moon: $moon";
        ?></div>
        <br>
        <br>
        <br>
        <br>
        <a id="link1" href="sunvsmoon.php?moon=TRUE">moon</a>
        
    </body>
</html>