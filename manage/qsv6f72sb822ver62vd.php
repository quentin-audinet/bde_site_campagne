<?php

if(isset($_POST['mail']) && isset($_POST['pass'])) {
    include "../db/db_connect.php";
    $pass=$db->quote(password_hash($_POST['pass'], PASSWORD_DEFAULT));
    $mail=$db->quote($_POST['mail']);
    $db->exec("INSERT INTO maintainers (mail, password) VALUES ($mail, $pass)");
    print('<script>alert("Comtpe crée !")</script>');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Add admin</title>
</head>

<body>
<form action="" method="post">
    <label for="mail">Mail:</label><input type="email" id="mail" name="mail" /><br/>
    <label for="pass">Mot de passe:</label><input type="password" id="pass" name="pass" /><br/>
    <input type="submit" />
</form>

</body>

</html>