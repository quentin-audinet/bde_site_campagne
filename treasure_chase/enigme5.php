<?php

$level = 5;
$answer = "68";
$hints = -1;
$hint = "<script>alert('Ce site devrait t\'aider: https://www.norauto.fr/c/235-revues-techniques.html');</script>";
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
    <a href="?hint=5">Indice</a>
</header>
<?php if(isset($hint_form)) {print($hint_form);} ?>

<div>
    <form action="" method="post">
        <h2>Dans la vidéo de présentation des Pirates des Carabeds j'ai remarqué une voiture...</h2>
        <p>Donne moi la puissance en chevaux de cette voiture (c'est celle derrière Waël tout à droite, tu peux pas la louper)</p>
        <div><input type="text" id="answer" name="answer" />CV</div><input type="submit" value="Valider">
        <?php if(isset($result)) {print($result);} ?>
    </form>
    <?php if(isset($show_hint)){print($hint);} ?>

</div>
</body>
</html>