<?php
session_start();
if(isset($_POST['hint']) && isset($_POST['code'])) {
    include "functions.php";
    if(checkCode($_POST['hint'], $_POST['code'], $_SESSION['team'])) {
        $result = "<p class='valid'>CODE CORRECT !</p>";
    } else {
        $result = "<p class='false'>CODE FAUX</p>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Add a letter</title>

    <style>

        html {
            height: 100%;
        }
        body {
            background-color: sandybrown;
            font-size: 3em;
            position: relative;
            height: 95%;
        }

        h1 {
            font-size: 1.5em;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        form > div {
            display: flex;
            align-items: center;
        }

        label {
            width: 45%;
            font-size: 0.9em;
        }

        input {
            width:45%;
            height: 70px;
            font-size: 1em;
            margin: 10px 0;
        }

        #back {
            position: absolute;
            left: 5%;
            bottom: 0;
            text-decoration: none;
            color: white;
            background-color: #0f2029;
            padding: 10px 20px;
            border-radius: 10px;
        }

        .valid {
            background-color: #84c66b;
            padding: 50px 30px;
        }

        .false {
            background-color: #ce5454;
            padding: 50px 30px;
        }
    </style>
</head>

<body>
<h1>Entrez les informations que vous avez récupéré</h1>
<form action="" method="post">

    <div><label for="hint">Numéro de l'indice: </label><input type="number" max="14" min="1" name="hint" id="hint" required/></div>
    <div><label for="code">Code de l'indice: </label><input type="text" name="code" id="code" required></div>
    <input id="submit" type="submit" value="Vérifier" />
    <?php if(isset($result)) {print($result);} ?>

    <a id="back" href="accueil.php">Retour</a>

</form>

</body>
</html>