<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <style>
    </style>
    <meta charset="UTF-8">
    <title> Salasana </title>
</head>
<body>
    <br><br>
    <?php
        if ($_POST['käyttäjätunnus'] == "olliro" and $_POST['salasana'] == "1234") {
            echo "Salasana oikein!";
            echo "<br>Salainen viesti: Nyt on helmikuu.";
        } else {
            ?> 
            <form action="salasana.php" method="post">
                <p>Syötä käyttäjätunnus:</p>
                <input type="text" name="käyttäjätunnus"></input><br>
                <p>Syötä salasana:</p>
                <input type="password" name="salasana"></input><br>
                <input type="submit" name="submit"></input>
            </form>
            <?php 
            } if ($_POST['käyttäjätunnus'] == "olliro" and $_POST['salasana'] == "1234") {
                echo "Käyttäjätunnus tai salasana on väärin.";
        }
    ?>
</body>
</html>