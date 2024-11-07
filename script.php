<?php
    session_start();
    if (!(isset($_SESSION["numReview"]))) {
        $_SESSION["numReview"] = 0;
        $_SESSION["reviews"] = array();
        $_SESSION["lastDate"] = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>script.php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $list = getData();
        var_dump($_SESSION["reviews"]);
        showData($list);

        function getData(){
            $date = $_POST["date"];
            $review = intval($_POST["review"]);

            $_SESSION["numReview"]++;
            array_push($_SESSION["reviews"], $review);
            $_SESSION["lastDate"] = $date;

            return array("Data inserita" => $date, "Recenzione data" => $review);
        }

        function showData($l) {
            echo "<div id='divScript'>";
                echo "<h1><i>DATI RECENZIONE</i></h1>";
                foreach ($l as $key => $value) {
                    echo "<p><b><i>$key :</i></b></p>";
                    echo "<p>$value</p>";
                }
                echo "<a class='buttonSend' href='./presentazione.html'>FAI UN ALTRA RECENZIONE</a>";
                echo "<br>";
                echo "<br>";
                echo "<a class='buttonSend' href='./risultati.php'>VISUALIZZA TUTTE LE RECENZIONI</a>";
            echo "</div>";
        }
    ?>
</body>
</html>