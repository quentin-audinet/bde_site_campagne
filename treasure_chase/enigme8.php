<?php

$level = 8;
$answer = "discobed je connais pas";
$hints=-1;
$hint = "<script>alert('Moins de boules, moins rapides et le bedzir est plus gros !')</script>";
include "base.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Enigme 8</title>
    <link rel="stylesheet" href="enigmes.css" />

    <style>
        html {
            width: 100%;
            height: 100%;
        }

        body {
            width: 100%;
            height: 100%;
        }

        #game {
            position: relative;
            width: 100%;
            height: 82%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .moving {
            position: absolute;
            top: 10%;
        }
        
        .carabed {
            cursor: not-allowed;
        }
        
        .boule {
            cursor: pointer;
        }

        h2 {
            text-align: center;
        }

        .neon__text {
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

        #countdown {
            font-size: 30vw;
            cursor: default;
        }

        #countdown::selection, img::selection {
            background: none;
        }
    </style>
</head>

<body>
<header>
    <a href="enigmes.php">Retour</a>
    <a href="?hint=8">Indice</a>
</header>
<?php if(isset($hint_form)) {print($hint_form);}

    if(isset($_POST['go'])) {
        include "enigme8_play.php";
    } else {
        include "enigme8_launch.php";
        if (isset($show_hint)) {
            print($hint);
        }
    }
    ?>

</body>
</html>