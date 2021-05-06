<?php
session_start();
if(!isset($_SESSION['team'])) {
    header("Location: connect.php");
}
$team = htmlspecialchars($_SESSION['team']);

include "functions.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Home</title>

    <style>
        html {
            height: 100%;
        }

        body {
            background-color: sandybrown;
            height: 95%;
            padding: 0;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            position: relative;
        }

        h1 {
            text-align: center;
            font-size: 5em;
        }

        h2 {
            font-size: 4em;
        }

        .letter {
            display: inline-block;
            width: 7%;
            background-color: white;
            margin: 1%;
            padding: 2% 0.5%;
            font-size: 5em;
            text-align: center;
            border-radius: 10px;

        }

        ul {
            margin-left: 50px;
            font-size: 4em;
        }

        #add {
            position: absolute;
            right: 5%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            width: 100px;
            height: 100px;
            text-decoration: none;
            font-size: 7em;
            font-weight: bold;
            color: #0f2029;
            text-align: center;
            padding-bottom: 5px;
            border: solid 10px #0f2029;
            border-radius: 50%;
        }
    </style>
</head>

<body>
<h1>Bienvenue équipe <?php print($team); ?></h1>
<?php print(getCode($team)); ?>
<h2>Vos indices: </h2>
<ul>
    <?php print(listHints($team)); ?>
</ul>

<a id="add" href="add_letter.php">+</a>
</body>
</html>