<?php
session_start();
if(!isset($_SESSION['maintainer'])) {
    header("Location:../login.php");
}
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Gestion des news</title>
    <link rel="stylesheet" href="../../styles/template.css" />
    <link rel="stylesheet" href="../../styles/manage_news.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
<?php include "../header.php"; ?>

<section class="content">
    <div class="show_zone">

        <h1>Ajouter une news</h1>

        <form id="add-news-form" action="add_news.php" method="post">
            <div><label for="author">Auteur: </label><input type="text" id="author" name="author" required/></div>
            <div><textarea name="content" rows="15" cols="150" required></textarea><button class="add-btn"><i class="fa fa-plus-square fa-2x"></i></button></div>
        </form>

        <h1>Gestion des news</h1>

        <?php include "../../db/db_connect.php";
        $response = $db->query("SELECT * FROM news");
        while($row = $response->fetch()) {
            print('
            <div class="news">
            <form action="update_news.php" method="post">
                <input type="hidden" name="id" value="' . $row['id'] . '" />
                <label for="author">Auteur: </label><input type="text" id="author" name="author" value="' . $row['auteur'] . '"/>
                <textarea name="content" rows="4" cols="120">' . str_replace("<br/>", "\n", $row['contenu']) . '</textarea>
                <button class="edit-btn"><i class="fa fa-edit fa-2x"></i> </button>
            </form>
            <form action="remove_news.php" method="post">
                    <input type="hidden" name="id" value="' . $row['id'] .'" />
                    <button class="remove-btn"><i class="fa fa-trash fa-2x"></i> </button>
            </form>
            </div>
            ');
        }
        ?>


    </div>
</section>
</body>