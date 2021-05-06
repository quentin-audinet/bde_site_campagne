<?php
session_start();
$user = $_SESSION['username'];

include "functions.php";

addLevel($user, 0);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Welcome</title>

    <style>

        @font-face {
            font-family: PiecesOfEight;
            src: url("../fonts/Pieces_of_Eight.ttf");
        }

        body {
            position: relative;
            animation: anim_bg 8s ease-in;
            background-color: #937142;
            text-align: justify;
        }

        .text {
            font-family: PiecesOfEight;
            margin: 0 10%;
            margin-top: 5%;
            margin-bottom: 5%;
            font-size: 3vw;
            line-height: 1;
            color: #d7ffd2;
            text-shadow:
                    0 0 6px rgba(202,228,225,0.92),
                    0 0 30px rgba(30,232,142,0.34),
                    0 0 12px rgba(30,232,142,0.52),
                    0 0 21px rgba(30,232,142,0.92),
                    0 0 34px rgba(30,232,142,0.78),
                    0 0 54px rgba(30,232,142,0.92);
        }

        .line {
            opacity: 0;
        }

        #begin {
            text-decoration: none;
            position: absolute;
            bottom: 0.5%;
            right: 5%;
            color: white;
            background-color: #0f2029;
            font-size: 2vw;
            padding: 10px 20px;
            border-radius: 10px;
            border: 2px solid white;
            opacity: 0;
        }

        @keyframes anim_bg {
            from {
                background-color: #000000;
            }
            to {
                background-color: #937142;
            }

        }
    </style>
</head>

<body>
<p class="text"><span class="line">Bienvenue <?php print($user); ?><br/><br/><br/></span>
    <span class="line">Ta quête pour trouver le trésor perdu des Pirates des temps anciens commence ici.<br/><br/></span>
<span class="line">Tu devras accomplir huit quêtes si tu désires t'en emparer. Mais attention, tu n'es pas seul et de nombreux autres pirates tenteront de te devancer.<br/><br/></span>
<span class="line">Dans ces épreuves tu devras utiliser de nombreuses compétences. Si tu es bloqué ne t'en fais pas, toutes les 15min, tu gagnes un indice qui te permettra d'avancer.</br/><br/></span>
<span class="line">Utilises les avec parcimonie car le temps est précieux !<br/><br/></span>
<span class="line">Sur ce, nous te souhaitons bonne chance,<br/><br/><br/></span>
<span class="line">Les Carabed</span></p>

<a href="enigmes.php" id="begin">Commencer</a>

<script type="text/javascript" src="../scripts/intro.js"></script>

</body>
</html>