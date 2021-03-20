<?php
session_start();
if(!isset($_SESSION['maintainer'])) {
    header("Location:login.php");
}

include "../db/db_connect.php";
$req = "UPDATE members SET nom=" . $db->quote($_POST['name'])
    . ", surnom=" . $db->quote($_POST['nickname'])
    . ", description=" . $db->quote($_POST['desc'])
    . (($_FILES['photo']['name']!='')?", photo=" . $db->quote($_FILES['photo']['name']):"")
    . ", bureau=" . (isset($_POST['bureau'])?"'1'":"'0'") . " WHERE id=" . $db->quote($_POST['id']);


$upload_dir = '../images/members/';
if($_FILES['photo']['name']!='') {
    include "save_image.php";
}
$db->exec($req);
header('Location:manage_members.php');

?>