



<html>
    <head>
        <link rel="stylesheet" href="../style.css">
    </head>

    <body>
        <h2>passord er ikke sikert lag et passord du ikke bruker noe annet sted!</h2>



    <?php

    require "config.php";

    if (isset($_POST['uname'])){



        

        $conn = new mysqli($dbhost,$dbuser,$dbpass);

        if ($conn->connect_error){

            die("conn failed" . $conn->connect_error."<br>");

        }

        

        if($conn->query("insert into $dbnavn.brukere (brukernavn,passord,epost) values ('".$_POST['uname']."','".$_POST['pass']."','".$_POST['mail']."')")===TRUE){

        
            ?>
            <p>Du er registrert</p>
            <a id="link1" href="https://kongenhakon.no">tilbake til forsiden</a><br><br><br>
            <?php
        }

        

        

        $conn->close();

    }

    ?>



        <form action="registrer.php" method="post">

            <div>

                <label for="uname">bruker navn</label>

                <input type="text" id="uname" name="uname" placeholder="spongebob">

            </div>

            <br>

            <div>

                <label for="pass">passord</label>

                <input type="password" id="pass" name="pass" placeholder="hello123">

            </div>

            <br>

            <div>

                <label for="mail">epost</label>

                <input type="text" id="mail" name="mail" placeholder="spongebob@gmail.com">

            </div>

            <input type="submit">

            <input type="reset">

        </form>
        <a href="login.php"></a>

        <?php



        ?>

    </body>

</html>