<?php
session_start();
if(!isset($_SESSION['maintainer'])) {
    header("Location:login.php");
}

include "../db/db_connect.php";
$req = "UPDATE photos SET description=" . $db->quote($_POST['description']) . " WHERE id=" . $db->quote($_POST['id']);
$db->exec($req);
header('Location:manage_photos.php');
?>