<?php
    session_start();
    if (!(isset($_SESSION["numReview"]))) {
        error();
    } else {
        session_unset();
        showReset();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reset.php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        function error(){
            echo "<div class='divResultErr'>";
                echo "<h1 class='h1ResultErr'><i>NESSUNA RECENZIONE DA ELIMINARE</i></h1>";
                echo "<a class='buttonSend' href='./presentazione.html'>INSERISCI RECENZIONE</a>";
            echo "</div>";
        }

        function showReset(){
            echo "<div id='divReset'>";
            echo "<h1 id='h1Reset'><i>RECENZIONI ELIMINATE CON SUCCESSO!</i></h1>";
            echo "<a class='buttonSend' href='./presentazione.html'>INSERISCI NUOVA RECENZIONE</a>";
            echo "</div>";
        }
    

    ?>
</body>
</html>