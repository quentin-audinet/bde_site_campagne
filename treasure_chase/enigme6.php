<?php

$level = 6;
$answer = "j'aime la si101";
include "base.php";
$hints=-1;
$hint = "<script>alert('Tu peux trouver des outils en ligne pour analyser le spectre audio')</script>";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Enigme 6</title>
    <link rel="stylesheet" href="enigmes.css" />

    <style>
        .download {
            color: #0f2029;
            margin: 5px;
        }

        .download:hover {
            border-bottom: solid 1px #0f2029;
        }
    </style>
</head>

<body>
<header>
    <a href="enigmes.php">Retour</a>
    <a href="?hint=6">Indice</a>
</header>
<?php if(isset($hint_form)) {print($hint_form);} ?>

<div>
    <form action="" method="post">
        <h2>Chaima a reçu un audio très louche... Aide la à comprendre de quoi il s'agit</h2>
        <audio src="sound.wav" controls ></audio><a class="download" href="sound.wav">Télécharger</a>
        <input type="text" id="answer" name="answer" /><input type="submit" value="Valider">
        <?php if(isset($result)) {print($result);} ?>
    </form>
    <?php if(isset($show_hint)) {print($hint);} ?>

</div>
</body>
</html>