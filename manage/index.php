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

<header>
    <nav id="banner">
        <ul>
            <li><a href="members/manage_members.php">Gérer les membres</a> </li>
            <li><a href="photos/manage_photos.php">Gérer les photos</a> </li>
            <li><a href="challenges/manage_challenges.php">Gérer les défis</a> </li>
            <li><a href="news/manage_news.php">Gérer les news</a> </li>
            <li><a href="disconnect.php">Déconnexion</a> </li>
        </ul>
    </nav>
</header>

<section class="content">
    <div class="show_zone">
        <h1>Administration</h1>
        <p>Vous êtes sur la page d'administration. Vous pouvez gérer les membres de la liste, créer des posts et actualiser les défis.</p>
    </div>
</section>

</body>
</html>