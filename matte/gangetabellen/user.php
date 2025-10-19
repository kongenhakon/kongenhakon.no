<?php
require "../../config.php";
header('Content-Type: application/json');
        $conn = new mysqli($dbhost,$dbuser,$dbpass);
        if ($conn->connect_error){
            die("conn failed" . $conn->connect_error."<br>");
        }
        
        $users = $conn->query("select brukernavn,epost,gange_xp from $dbnavn.brukere ORDER BY gange_xp desc");
        
        echo "[";
        if ($users->num_rows > 0){
            $first=true;
            while ($user = $users->fetch_assoc()){
                if(!$first){
                    echo ",";
                }
                $first=false;
                echo "{\"brukernavn\":\"".$user['brukernavn']."\",\"epost\":\"".$user['epost'].'","gange_xp":"'.$user['gange_xp'].'"}';
            }
        }
        echo "]";
        $conn->close();
?>