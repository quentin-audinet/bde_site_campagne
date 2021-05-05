<?php

$level = 2;
$answer = "pdc{de984caf82f37b152f1160ab971bd2cde80db0fee848e856b41e62598aa7cd0c}";

include "base.php";

include "../db/db_connect.php";
if(isset($_POST['username']) && isset($_POST['password'])) {
    $req = "SELECT * FROM weak_table WHERE username='" . $_POST['username'] . "' AND password='" . $_POST['password'] . "'";
    $data = $db->query($req);
    if($row = $data->fetch()) {
        $ret = "<h2>Bonjour " . $row['username'] . "</h2>" . "<p>Votre mot de passe est : " . $row['password'] . "</p>";
    } else {
        $ret = "<h2>Identifiants incorrects !</h2>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Enigme 2</title>
    <link rel="stylesheet" href="enigmes.css" />

</head>

<body>
<header>
    <a href="enigmes.php">Retour</a>
    <a href="">Indice</a>
</header>

<div class="challenge">
    <form action="" method="post">
        <h2>Il est temps de réveiller le pirate qui est en toi</h2>
        <p>Ton but est de te connecter en tant que admin</p>
        <label>Nom d'utilisateur: </label><input type="text" name="username" /><br/>
        <label>Mot de passe: </label><input type="password" name="password"/><br/>
        <input type="submit" value="Se connecter"/>

        <!-- Un petit indice, c'est un injection SQL, ce que tu entres sera ensuite inséré dans la requête... Ca serait embêtant que la requête se termine avant d'avoir vérifié le mot de passe...-->
        <!--Petit rappel : une requête SQL est de la forme : -->
        <!-- SELECT <donnees> FROM <table> WHERE <param1>='<val1>' AND <param2>='<val2>' AND ... ; -->
    </form>
    <?php if(isset($ret)) {print($ret);} ?>
    <form action="" method="post">
        <h2>Rentre le mot de passe de l'admin pour valider</h2>
        <input type="text" name="answer" />
        <input type="submit" value="Vérifier" disabled/>
    </form>
    <?php if(isset($result)) { print($result);} ?>

</div>
</body>
</html>