<?php
session_start();
if(!isset($_SESSION['maintainer'])) {
    header("Location:../login.php");
}
include "../../db/db_connect.php";
$req = "INSERT INTO members (";

if($_FILES['photo']!="") {
    $req.="photo, ";
}
if($_POST['nickname']!="") {
    $req.="surnom, ";
}
if($_POST['desc']!="") {
    $req.="description, ";
}

$req.="statut, nom) VALUES (";
if($_FILES['photo']!="") {
    $req.= $db->quote($_FILES['photo']['name']).",";
}
if($_POST['nickname']!="") {
    $req.= $db->quote($_POST['nickname']).",";
}
if($_POST['desc']!="") {
    $req.= $db->quote($_POST['desc']).",";
}

$req.= $db->quote($_POST['statut']).",";
$req.= $db->quote($_POST['name']).")";

$upload_dir = '../../images/members/';
if($_FILES['photo']['name']!='') {
    include "../save_image.php";
}
$db->exec($req);

header('Location:manage_members.php');

?>