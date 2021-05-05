<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title class="t_chase"></title>
    <link rel="stylesheet" href="styles/template.css" />

    <style>

        @font-face {
            font-family: KronaOne-Regular;
            src: url("fonts/KronaOne-Regular.ttf");
        }
        #method {
            display: flex;
            justify-content: space-around;
            height: 100%;
            align-items: center;
        }

        p {
            text-align: center;
            color: #0f2029;
            font-size: large;
            font-family: KronaOne-Regular   ;

        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
<?php include "templates/header.php"; ?>

<div id="method">
    <a href=""><div><img src="images/presentiel.jpg" width="300" height="300"/><p>Présentiel</p></div></a><a href="treasure_chase/accueil.php"><div><img src="images/distanciel.jpg" width="300" height="300"/><p>Distanciel</p></div></a>
</div>

<?php include "templates/footer.html" ?>
</body>
</html>