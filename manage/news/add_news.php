<?php
session_start();
if(!isset($_SESSION['maintainer'])) {
    header("Location:../login.php");
}

include "../../db/db_connect.php";

$author = $db->quote($_POST['author']);
$content = $db->quote(str_replace("\n", "<br/>", $_POST['content']));

$req = "INSERT INTO news (auteur, contenu) VALUES ($author, $content)";
$db->exec($req);

header('Location:manage_news.php');

?>