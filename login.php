<?php

require "config.php";

        if(isset($_POST['uname'])){

            $conn = new mysqli($dbhost,$dbuser,$dbpass);

            if ($conn->connect_error){

                die("conn failed" . $conn->connect_error."<br>");

            }

            

            $users = $conn->query("SELECT 1 FROM $dbnavn.brukere WHERE brukernavn='".$_POST['uname']."' and passord='".$_POST['pass']."'");

            if ($users->num_rows == 1){

                $_SESSION['username']=$_POST['uname'];

                

            }else{
                echo "fant ingen treff!";
            }
            $conn->close();

        }



        if(isset($_GET['logout'])){

            unset($_SESSION['username']);

        }



        



        if(isset($_SESSION['username'])){

            echo $_SESSION['username'];

            ?>




                <a id="link1" href="https://kongenhakon.no?logout">LOG OUT</a><br>


            <?php

        } else {

            ?>

            <form action="/" method="post">

                <div id="bruker">

                    
                    <input type="text" id="uname" name="uname" placeholder="spongebob">

                </div>

                <br>

                <div>

                    <label for="pass">passord:</label><br>
                    <input type="password" id="pass" name="pass" placeholder="password123">

                </div>

                <br>

                <div>

                    <input type="reset">

                </div>
                <div>
                    <input type="submit" name="LOG IN"><a href="registrer.php" id="link1" >REGISTRERE</a><br>
                </div>


                

            </form>
            

            <?php

        }



        ?>