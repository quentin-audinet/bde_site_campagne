<?php
session_start();

include "../db/db_connect.php";
include "functions.php";
addLevel($_SESSION['username'], 9);
$rank = -1;
$req = "SELECT date FROM players WHERE username=" . $db->quote($_SESSION['username']);
$data = $db->query($req);
if($row = $data->fetch()) {
    $date = $row['date'];
    $req = "SELECT COUNT(*) FROM players WHERE level > 8 AND date < '$date'";
    $data = $db->query($req);
    if($row = $data->fetch()) {
        $rank = $row[0]+1;
    }
}

$req = "SELECT username FROM players WHERE level > 8 ORDER BY date ASC";
$data = $db->query($req);
$classement = "<ul>";
$i=1;
while($row = $data->fetch()) {
    $classement.="<li>#".$i." ".$row['username']."</li>";
    $i++;
}
$classement.="</ul>";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Félicitation !</title>

    <style>
        @font-face {
            font-family: PiecesOfEight;
            src: url("../fonts/Pieces_of_Eight.ttf");
        }

        html {
            height: 100%;
        }

        body {
            position: relative;
            background: #0c5460;
            color: #ebfdec;
            height: 90%;
        }

        h1 {
            text-align: center;
            font-family: PiecesOfEight;
            font-size: 4vw;
            color: white;
        }

        ul {
            list-style-type: none;
        }

        #back {
            width: 100%;
            position: absolute;
            bottom: 0;
            text-align: center;
        }

        #back > a {
            text-decoration: none;
            padding: 20px 30px;
            background: #ac962d;
            border-radius: 10px;
            font-size: 1vw;
            color: white;
        }


    </style>
</head>

<body>
<h1>Bravo, tu as terminé toutes les quêtes !</h1>
<h2><?php if($rank === -1) {
    print("Un problème est survenu en récupérant ton rang... Réessaie, arrête vos tentatives de triche ou contacte un webmaster");
} else {
    print("Tu es classé n°$rank");
    }
    ?></h2>

<!-- TODO ajouter lots-->

<?php

switch ($rank) {
    case 1:
        print("Tu as gagné la JBL");
        break;
    case 2:
        print("Tu as gagné la license");
        break;
    default:
        print("Tu n'as malheuresement rien gagné...");
        break;
}
?>

<h2>Le classement est le suivant:</h2>
<?php print($classement); ?>

<div id="back"><a  href="enigmes.php">Retour aux énigmes</a></div>
</body>
</html>
