<?php
session_start();
if(!isset($_SESSION['maintainer'])) {
    header("Location:../login.php");
}
include "../../db/db_connect.php";

$fb = $_POST['fb_link'];
$insta = $_POST['insta_link'];
$twitter = $_POST['twitter_link'];
$tiktok = $_POST['tiktok_link'];
$socials = $db->quote(($fb!=""?"<a href='$fb' target='_blank'><i class='fab fa-facebook'></i></a>":"").
    ($insta!=""?"<a href='$insta' target='_blank'><i class='fab fa-instagram'></i></a>":"").
    ($twitter!=""?"<a href='$twitter' target='_blank'><i class='fab fa-twitter'></i></a>":"").
    ($tiktok!=""?"<a href='$tiktok' target='_blank'><i class='fab fa-tiktok'></i></a>":""));



$req = "INSERT INTO members (";

if($_FILES['photo']['name']!="") {
    $req.="photo, ";
}
if($_POST['nickname']!="") {
    $req.="surnom, ";
}
if($_POST['desc']!="") {
    $req.="description, ";
}

$req.="statut, nom, socials) VALUES (";
if($_FILES['photo']['name']!="") {
    $req.= $db->quote($_FILES['photo']['name']).",";
}
if($_POST['nickname']!="") {
    $req.= $db->quote($_POST['nickname']).",";
}
if($_POST['desc']!="") {
    $req.= $db->quote($_POST['desc']).",";
}

$req.= $db->quote($_POST['statut']).",";
$req.= $db->quote($_POST['name']).",";
$req.= $socials.")";

$upload_dir = '../../images/members/';
if($_FILES['photo']['name']!='') {
    include "../save_image.php";
}
$db->exec($req);
header('Location:manage_members.php');

?>