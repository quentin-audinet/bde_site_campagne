<?php
session_start();
if(!isset($_SESSION['maintainer'])) {
    header("Location:login.php");
}

include "../db/db_connect.php";
$req = "INSERT INTO photos (nom, description) VALUES (" . $db->quote($_FILES['photo']['name']) .", " . $db->quote($_POST['description']) . ")";
$db->exec($req);

$upload_dir = '../images/photos/';

include "save_image.php";
header('Location:manage_photos.php');

?>