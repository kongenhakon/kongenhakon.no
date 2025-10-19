<?php

require "../config.php";

header('Content-Type: application/json');

        $conn = new mysqli($dbhost,$dbuser,$dbpass);

        if ($conn->connect_error){

            die("conn failed" . $conn->connect_error."<br>");

        }

        

        $users = $conn->query("select brukernavn,epost,score from $dbname.brukere ORDER BY score desc");

        

        echo "[";

        if ($users->num_rows > 0){

            $first=true;

            while ($user = $users->fetch_assoc()){

                if(!$first){

                    echo ",";

                }

                $first=false;

                echo "{\"brukernavn\":\"".$user['brukernavn']."\",\"epost\":\"".$user['epost'].'","score":"'.$user['score'].'"}';

            }

        }

        echo "]";

        $conn->close();

?>