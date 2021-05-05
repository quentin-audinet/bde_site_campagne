<?php

$level = 4;
$answer = "72";

include "base.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Enigme 4</title>
    <link rel="stylesheet" href="enigmes.css" />

    <style>
        .equations img {
            width: 75px;
            height: 75px;
        }

        .equations {
            font-size: 2em;
        }

        .equations p {
            display: flex;
            align-items: center;
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
        <h2>Alban cherche désespéremment à évaluer la valeur de son écocup...</h2>
        <p>Après avoir parlé à de nombreux marchands à travers les mers, il a obtenu les informations suivantes :</p>

        <div class="equations">
            <p><img src="../images/treasure_chase/bague.png" alt="bague" /><img src="../images/treasure_chase/bague.png" alt="bague" /><img src="../images/treasure_chase/crane_or.png" alt="crane" /><img src="../images/treasure_chase/ecocup.png" alt="ecocup" /> = 192€</p>
            <p><img src="../images/treasure_chase/piece.png" alt="piece" /><img src="../images/treasure_chase/bague.png" alt="bague" /> = 42€</p>
            <p><img src="../images/treasure_chase/sabre.png" alt="sabre" /><img src="../images/treasure_chase/crane_or.png" alt="crane" /><img src="../images/treasure_chase/crane_or.png" alt="crane" /><img src="../images/treasure_chase/piece.png" alt="piece" /> = 139€</p>
            <p><img src="../images/treasure_chase/bague.png" alt="bague" /><img src="../images/treasure_chase/piece.png" alt="piece" /><img src="../images/treasure_chase/piece.png" alt="piece" /><img src="../images/treasure_chase/piece.png" alt="piece" /><img src="../images/treasure_chase/piece.png" alt="piece" /><img src="../images/treasure_chase/piece.png" alt="piece" /> = 70€</p>
            <p><img src="../images/treasure_chase/bague.png" alt="bague" /><img src="../images/treasure_chase/crane_or.png" alt="crane" /><img src="../images/treasure_chase/sabre.png" alt="sabre" /><img src="../images/treasure_chase/sabre.png" alt="sabre" /><img src="../images/treasure_chase/sabre.png" alt="sabre" /> = 177€</p>
        </div>
        <div><input type="text" id="answer" name="answer" />€</div><input type="submit" value="Valider">

        <?php if(isset($result)) {print($result);} ?>
    </form>

</div>
</body>
</html>