<?php
session_start();
if(!isset($_SESSION['maintainer'])) {
    header("Location:../login.php");
}

include "../../db/db_connect.php";
$req = "UPDATE members SET nom=" . $db->quote($_POST['name'])
    . ", surnom=" . $db->quote($_POST['nickname'])
    . ", description=" . $db->quote($_POST['desc'])
    . (($_FILES['photo']['name']!='')?", photo=" . $db->quote($_FILES['photo']['name']):"")
    . ", statut=" . ($db->quote($_POST['statut'])) . " WHERE id=" . $db->quote($_POST['id']);


if($_FILES['photo']['name']!='') {
    $upload_dir = '../../images/members/';
    include "../save_image.php";
}
$db->exec($req);
header('Location:manage_members.php');

?>