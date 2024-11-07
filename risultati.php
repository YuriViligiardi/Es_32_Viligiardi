<?php
    session_start();
    if (!(isset($_SESSION["numReview"]))) {
        error();
    } else {
        showdata();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>risultati.php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php  
        function error(){
            echo "<div id='divResultErr'>";
                echo "<h1 id='h1ResultErr'><i>NESSUNA RECENZIONE TROVATA</i></h1>";
                echo "<a class='buttonSend' href='./presentazione.html'>INSERISCI RECENZIONE</a>";
            echo "</div>";
        }

        function calculateMedia($lr){
            $somma = 0;
            foreach ($lr as $review) {
                $somma += $review;
            }
            return $somma / count($lr);
        }

        function showdata(){
            echo "<div class='divResult'>";
                echo "<h1><i>TUTTE LE RECENZIONI</i></h1>";
                echo "<table>";
                    echo "<tr>";
                        echo "<th>Recenzioni</th>";
                        echo "<th>Ultima data</th>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td>" . $_SESSION["numReview"] . "</td>";
                        echo "<td>" . $_SESSION["lastDate"] . "</td>";
                    echo "</tr>";
                echo "</table>";
                echo "<ul>";
                    foreach ($_SESSION['reviews'] as $review) {
                        echo "<li>" . $review . "</li>";
                    }
                echo "</ul>";
                $media = calculateMedia($_SESSION['reviews']);
                echo "<h3>La media delle recenzioni è $media</h3>";
                echo "<br>";
                echo "<a class='buttonSend' href='./presentazione.html'>FAI UN ALTRA RECENZIONE</a>";
            echo "</div>";
        }
    ?>
</body>
</html>