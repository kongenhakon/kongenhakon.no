<html>
    <body>
        <div id="sun"></div>
        <br>
        <button onclick="suns()">sun</button>
        <br>
        <div id="moon"></div>
        <br>
        <button onclick="moons()">moon</button>
        <?php
        $moon=0;
        $sun=0;
        $dbpass = "qdRBGyVc8e6b";
        $dbuser="psxrhyuu_php";
        $dbnavn="psxrhyuu_kongenhakon";
        $dbhost="localhost";
        
        $moonSql="insert into sunvsmoon (moon) values($moon)";
        $sunSql="insert into sunvsmoon (sun) values($sun)";

        function moons(){
            $moon=$moon+1;
            $conn = new mysqli($dbhost,$dbuser,$dbpass);

            if ($conn->connect_error){

            die("conn failed" . $conn->connect_error."<br>");

            }
            if ($conn->query($moonSql) === TRUE) {
            } else {
                echo "En feil oppstod: " . $conn->error;
            }


        }
        function suns(){
            $sun=$sun+1;
            $conn = new mysqli($dbhost,$dbuser,$dbpass);

            if ($conn->connect_error){

            die("conn failed" . $conn->connect_error."<br>");

            }
            if ($conn->query($sunSql) === TRUE) {
                
            } else {
                echo "En feil oppstod: " . $conn->error;
            }
        }
        while(True){
            echo "sun: ".$sun;
            echo "moon: ".$moon;
        }
        ?>
    </body>
</html>