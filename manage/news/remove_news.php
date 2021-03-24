<?php
session_start();
if(!isset($_SESSION['maintainer'])) {
    header("Location:../login.php");
}

include "../../db/db_connect.php";
$req = "DELETE FROM news WHERE id=" . $db->quote($_POST['id']);
$db->exec($req);
header('Location:manage_news.php');

?>