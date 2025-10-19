<?php  
    if (isset($_SESSION['username'])){
        echo "gange poeng: ";
        require "config.php";
        $conn = new mysqli($dbhost,$dbuser,$dbpass);
        if ($conn->connect_error){
            die("conn failed" . $conn->connect_error."<br>");
        }
        
        $users = $conn->query("select brukernavn,epost,score,gange_xp from $dbnavn.brukere where brukernavn='".$_SESSION['username']."'");
        
        if ($users->num_rows > 0){
            $user = $users->fetch_assoc();
            echo $user['gange_xp'];
        }
        $conn->close();
    }
?>