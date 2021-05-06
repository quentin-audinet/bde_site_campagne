<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: accueil.php");
}
 else {
     include "../db/db_connect.php";
     $username = $_SESSION['username'];
     $req = "SELECT level FROM players WHERE username=" . $db->quote($username);
     $level = ($db->query($req)->fetch())['level'];
 }

 if($level ==0) {
     header("Location: welcome.php");
 } else {
     if($level==9) {
         header("Location: theend.php");
     }
 }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Enigmes</title>
        <link rel="stylesheet" href="../styles/fontawesome/css/fontawesome.css" />
        <link rel="stylesheet" href="../styles/fontawesome/css/brands.css" />
        <link rel="stylesheet" href="../styles/fontawesome/css/solid.css" />

        <style>

            body {
                background-color: #e8c69d;
            }

            #map {
                text-align: center;
                position: relative;
            }

            #map a {
                position: absolute;
                text-decoration: none;
            }

            #map div {
                display: flex;
                justify-content: center;
                width: 2.5vw;
                height: 2.5vw;
                line-height: 2.5vw;
                margin: 0 0.5vw;
                cursor: pointer;
                border-radius: 50%;
                border: 0.3vw solid #c10c0c;
                float: left;
                transition: all 0.5s ease;
            }

            #map div a {
                color: #c10c0c;
                font-size: 1.8vw;
                transition: all 0.5s ease;
            }


            #map div:hover.enigme {
                border: 0.3vw solid #6de09f;
                box-shadow: 0 0 15px #6de09f;
                transition: all 0.5s ease;
            }

            #map div:hover.enigme a{
                color: #6de09f;
                text-shadow: 0 0 15px #6de09f;
                transition: all 0.5s ease;
            }

            /* ENIGME 1 */
            #map div.enigme1 {
                position: absolute;
                top: 35%;
                left: 13%;
            }

            /* ENIGME 2 */
            #map div.enigme2 {
                position: absolute;
                top: 60%;
                left: 30%;
            }

            /* ENIGME 3 */
            #map div.enigme3 {
                position: absolute;
                top: 27%;
                left: 37%;
            }


            /* ENIGME 4 */
            #map div.enigme4 {
                position: absolute;
                top: 39%;
                left: 59%;
            }

            /* ENIGME 5 */
            #map div.enigme5 {
                position: absolute;
                top: 52%;
                left: 45%;
            }

            /* ENIGME 6 */
            #map div.enigme6 {
                position: absolute;
                top: 77%;
                left: 58%;
            }

            /* ENIGME 7 */
            #map div.enigme7 {
                position: absolute;
                top: 66%;
                left: 79%;
            }

            /* ENIGME 8 */
            #map div.enigme8 {
                position: absolute;
                top: 17%;
                left: 77%;
            }

            #map div.trophee {
                position: absolute;
                top: 3%;
                left: 90%;
                color: #c10c0c;
                font-size: 1vw;
                transition: all 0.5s ease;
            }

            #map div:hover.trophee {
                border: 0.3vw solid #ea9618;
                box-shadow: 0 0 15px #ea9618;
                transition: all 0.5s ease;
            }

            #map div:hover.trophee i{
                color: #ea9618;
                text-shadow: 0 0 15px #ea9618;
                transition: all 0.5s ease;
            }


        </style>
    </head>

    <body>
    <h1>Bien le bonjour  <?php print($username); ?> !</h1>
    <h3>Complète toutes les enigmes pour gagner des lots incroyables !</h3>
    <div id="map">
        <img src="../images/treasure_chase/chemins/chemin<?php print(min($level, 8)); ?>.png" width="90%">
        <?php
        for($i = 1; $i <= min($level,8); $i++) {
            print("<div class='enigme enigme$i'><a href='enigme$i.php'>$i</a></div>");
        }
        if($level == 10) {
            print("<div class='trophee'><a href='theend.php'><i class='fas fa-trophy' aria-hidden='true'></i></a></div>");
        }
        ?>
    </div>
    </body>
</html>
