<?php require "conf.php"; ?>

<?php
if(!isset($_SESSION['username'])) {
    header('Location:login.php');
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" />
        <title class="t_welcome">Bienvenue !</title>
        <link rel="stylesheet" href="styles/back_acceuil.css" />

    </head>

    <body>
    <h1>Salut à toi <?php print($_SESSION['username']); ?> !</h1>


    </body>
</html>