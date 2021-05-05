<?php

$level = 5;
$answer = "68";

include "base.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Enigme 5</title>
    <link rel="stylesheet" href="enigmes.css" />
</head>

<body>
<header>
    <a href="enigmes.php">Retour</a>
    <a href="">Indice</a>
</header>

<div>
    <form action="" method="post">
        <h2>Dans la vidéo de présentation des Pirates des Carabeds j'ai remarqué une voiture...</h2>
        <p>Donne moi la puissance en chevaux de cette voiture (c'est celle derrière Waël à droite, tu peux pas la louper)</p>
        <div><input type="text" id="answer" name="answer" />CV</div><input type="submit" value="Valider">
        <?php if(isset($result)) {print($result);} ?>
    </form>

</div>
</body>
</html>