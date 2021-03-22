<?php
session_start();
if(!isset($_SESSION['maintainer'])) {
    header("Location:login.php");
}
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8" />
    <title>Administration</title>
    <link rel="stylesheet" href="../styles/template.css">
</head>

<body>

<?php include "header.php"; ?>
<section class="content">
    <div class="show_zone">
        <h1>Administration</h1>
        <p>Vous êtes sur la page d'administration. Vous pouvez gérer les membres de la liste, créer des posts et actualiser les défis.</p>
    </div>
</section>

</body>
</html>