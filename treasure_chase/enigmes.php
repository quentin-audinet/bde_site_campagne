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
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Enigmes</title>

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
        </style>
    </head>

    <body>
    <h1>Bienvenue <?php print($username); ?> niveau <?php print($level); ?></h1>
    <h3>Complète toutes les enigmes pour gagner des lots incroyables !</h3>
    <div id="map">
        <img src="../images/treasure_chase/map.png" width="90%">
        <?php
        for($i = 1; $i <= $level; $i++) {
            print("<div class='enigme enigme$i'><a href='enigme$i.php'>$i</a></div>");
        }
        ?>
    </div>
    </body>
</html>
