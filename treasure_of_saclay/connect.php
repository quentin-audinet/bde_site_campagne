<?php
session_start();
if(isset($_SESSION['team'])) {
    header("Location: accueil.php");
}

if(isset($_POST['team']) && isset($_POST['access'])) {
    include "../db/db_connect.php";

    $name = $db->quote($_POST['team']);
    $access = $db->quote($_POST['access']);

    $req = "SELECT * FROM chase_teams WHERE name=$name AND access=$access";
    $data = $db->query($req);
    if($row = $data->fetch()) {
        $_SESSION['team'] = $_POST['team'];
        header("Location: accueil.php");
    } else {
        $error = "<span class='error'>Identifiants invalides, en cas de problème de connexion contactez <a href=''>Quentin Audinet</a> ou <a href=''>Augustin des Courtils</a></span>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Home</title>

    <style>

        @font-face {
            font-family: Caribbean;
            src: url("../fonts/Caribbean.ttf");
        }

        @font-face {
            font-family: PiecesOfEight;
            src: url("../fonts/Pieces_of_Eight.ttf");
        }

        body {
            background-color: #d2a67b;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: start;
            font-family: Caribbean;
            color: #0f2029;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: min-content;
            margin-top: 60px;
            padding: 20px 50px;
            font-size: 3em;
        }

        input {
            width: 100%;
            height: 80px;
            margin: 20px;
            font-size: 1.5em;
            vertical-align: center;
        }

        #button {
            font-family: PiecesOfEight;
            height: 90px;
        }

        .error {
            color: red;
            font-weight: bold;
            font-size: 1.5em;
            font-family: "Courier New";
            text-align: justify;
            width: 80%;
        }

        a {
            text-decoration: none;
            color: #0f2029;
        }
    </style>

</head>

<body>

    <form action="" method="post">
        <h1>Connection</h1>
        <label for="team">Nom de l'equipe: </label><input type="text" name="team" id="team" /><br/>
        <label for="access">Code d'acces: </label><input type="password" name="access" id="access" /><br/>
        <input id="button" type="submit" value="Entrer" />
    </form>
    <?php if(isset($error)) { print($error);} ?>

</body>
</html>