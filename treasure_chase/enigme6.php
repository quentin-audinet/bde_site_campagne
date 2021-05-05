<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: create_account.php");
}
include "functions.php";

if(!checkLevel($_SESSION['username'], 6)) {
    header("Location: enigmes.php");
}

if(isset($_POST['answer'])) {
    if(checkAnswer(strtolower($_POST['answer']), "jolly roger")) {
        addLevel($_SESSION['username'], 6);
        $result = "<p class='result correct'>Correct !</p>";
    }
    else {
        $result = "<p class='result incorrect'>incorrect</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Enigme 6</title>
    <link rel="stylesheet" href="enigmes.css" />

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f5cbb4;
        }

        a {
            text-decoration: none;
        }

        header {
            padding: 15px;
            background-color: #580f0f;
            font-size: 1.5vw;
        }

        header a {
            color: #d7cca4;
            margin-left: 40px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
        }

    </style>
</head>

<body>
<header>
    <a href="enigmes.php">Retour</a>
    <a href="">Indice</a>
</header>

<div>
    <form action="" method="post">
        <input type="text" id="answer" name="answer" /><input type="submit" value="Valider">
        <?php if(isset($result)) {print($result);} ?>
    </form>

</div>
</body>
</html>