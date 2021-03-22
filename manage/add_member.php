<?php
session_start();
if(!isset($_SESSION['maintainer'])) {
    header("Location:login.php");
}

include "../db/db_connect.php";
$req = "INSERT INTO members (";

if($_POST['photo']!="") {
    $req.="photo, ";
}
if($_POST['nickname']!="") {
    $req.="surnom, ";
}
if($_POST['desc']!="") {
    $req.="description, ";
}
if(isset($_POST['bureau'])) {
    $req.="bureau, ";
}
$req.="nom) VALUES (";
if($_POST['photo']!="") {
    $req.= $db->quote($_POST['photo']).",";
}
if($_POST['nickname']!="") {
    $req.= $db->quote($_POST['nickname']).",";
}
if($_POST['desc']!="") {
    $req.= $db->quote($_POST['desc']).",";
}
if(isset($_POST['bureau'])) {
    $req.="1,";
}
$req.= $db->quote($_POST['name']).")";

$db->exec($req);
header('Location:manage_members.php');

?>