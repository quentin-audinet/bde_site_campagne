<?php

$level = 1;
$answer = "jolly roger";

include "base.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Enigme 1</title>
    <link rel="stylesheet" href="enigmes.css" />

    <style>

        #answer {
            margin: 20px 0;
            width: 300px;
        }
    </style>
</head>

<body>
<header>
    <a href="enigmes.php">Retour</a>
    <a href="">Indice</a>
</header>

<div>
    <form action="" method="post">
        <h2>Quel est le véritable nom de ce logo ?</h2>
        <img src="../images/treasure_chase/drapeau_pirate.png" /><br/>
        <input type="text" id="answer" name="answer" /><input type="submit" value="Valider">
        <?php if(isset($result)) {print($result);} ?>
    </form>

</div>
</body>
</html>