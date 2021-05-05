<?php
session_start();
include "../db/db_connect.php";
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['check_password']) && !isset($_POST['connect'])) {
    $req_verif = "SELECT * FROM players WHERE username=" . $db->quote($_POST['username']);
    $data = $db->query($req_verif);
    if($data->fetch()) {
        $username_error = "<p class='error'>Nom d'utilisateur déjà pris !</p>";
    } else {
        if($_POST['password'] != $_POST['check_password']) {
            $pass_error = "<p class='error'>Les mots de passes sont différents !</p>";
        } else {
            $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $req = "INSERT INTO players (`username`, `password`) VALUES (" . $db->quote($_POST['username']) . ", '" . $hash . "')";
            $db->exec($req);
            $_SESSION['username'] = $_POST['username'];
            header("Location: enigmes.php");
        }
    }
} else {
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['connect'])) {
        $username = $db->quote($_POST['username']);
        $req = "SELECT * FROM players WHERE username=$username";
        $data = $db->query($req);
        if($row = $data->fetch()) {
            $pass_hash = $row['password'];
            if(password_verify($_POST['password'], $pass_hash)) {
                $_SESSION['username'] = $_POST['username'];
                header("Location: enigmes.php");
            } else {
                $connect_error = "<p class='error'>Identifiants incorrects</p>";
            }
        } else {
            $connect_error = "<p class='error'>Identifiants incorrects</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Inscris-toi</title>

    <style>

        html { height: 100%;}

        body {
            background-color: #e2d5ab;
        }

        form {
            background-color: #bdb28b;
            margin: 40px auto;
            width: min-content;
            border: solid 1px black;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 5px 40px;
            co
        }

        input {
            margin: 5px;
        }

        #forms {
            margin-top: 5%;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
<div id="forms">
    <form action="" method="post">
        <label for="username">Nom d'utilisateur : </label><input type="text" id="username" name="username" required><br/>
        <?php if(isset($username_error)) { print($username_error);} ?>
        <label for="password">Mot de passe : </label><input type="password" id="password" name="password" required><br/>
        <label for="check_password">Confirme ton mot de passe : </label><input type="password" id="check_password" name="check_password" required><br/>
        <?php if(isset($pass_error)) {print($pass_error);} ?>
        <input type="submit" value="Envoyer"/>
    </form>

    <form action="" method="post">
        <p>Déja inscrit ?</p>
        <?php if(isset($connect_error)) { print($connect_error); } ?>
        <label for="log_username">Nom d'utilisateur : </label><input type="text" id="log_username" name="username" required><br/>
        <label for="log_password">Mot de passe : </label><input type="password" id="log_password" name="password" required><br/>
        <input type="hidden" name="connect" />
        <input type="submit" value="Se connecter">
    </form>
</div>
</body>
</html>