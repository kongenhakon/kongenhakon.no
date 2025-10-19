<!doctype html>

<html>
    <head>
        <meta charset="utf-8">

        <title>Blank template</title>

        <!-- Load external CSS styles -->
        <link rel="stylesheet" href="../styles.css">

    </head>

    <body>

        <h1>SNFL</h1>
        <h1 style=color:red>AKA.STORE NORSKE FALSKE LEKSIKON</h1>
        <br>
        <br>
        <div>
            <h1>Regler for skriving av artikler</h1>
            <h2>1. ikke skriv om ekte personer eller folkeslag.</h2>
            <h2>2. ikke ha banne ord eller stygt spr&aring;k i teksten din.</h2>
            <h2>3. skriv mosomme ting!</h2>
        </div>
        <br>
        <br>
        <a href="/snfl/lageArtitler.php">lag en artikkel</a>
        <br>
        <br>
        <?php 
        require "artikel.php";
        ?>
    </body>

</html>