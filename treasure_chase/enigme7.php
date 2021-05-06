<?php

$level = 7;
$answer = "les carabeds sont trop beaux";
$hints=-1;
$hint = "<script>alert('10s de temps additionnel !')</script>";

include "base.php";


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Enigme 7</title>
    <link rel="stylesheet" href="enigmes.css" />
    <script type="text/javascript" src="../scripts/jquery-1.5.2.min.js"></script>

    <style>

        body > div {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        img {
            width: 9vw;
            height: 9vw;
            margin: 5px;
            box-sizing: border-box;
            border-color: #d7c6c1;
        }

        img:hover {
            opacity: 0.5;
            cursor: pointer;
        }

        .cases {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            align-items: center;
        }

        .cases > img {
            flex: 30%;
        }

        #game {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .countdown {
            font-size: 4vw;
            margin: 0 50px;
        }
    </style>
</head>

<body>

<header>
    <a href="enigmes.php">Retour</a>
    <a href="?hint=7">Indice</a>
</header>
<?php if(isset($hint_form)) {print($hint_form);} ?>

<div>

    <h2>Trouvez tous les membres des Carabeds (listeux et soutiens) dans le temps imparti !</h2>
    <?php
    if(isset($_POST['go'])) {
        include "enigme7_play.php";

    } else {
        include "enigme7_lauch.php";
        if (isset($show_hint)) {
            print($hint);
        }
    }
    ?>
</div>

</body>
</html>
