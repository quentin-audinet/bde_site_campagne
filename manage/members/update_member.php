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

$req = "UPDATE members SET nom=" . $db->quote($_POST['name'])
    . ", surnom=" . $db->quote($_POST['nickname'])
    . ", description=" . $db->quote($_POST['desc'])
    . (($_FILES['photo']['name']!='')?", photo=" . $db->quote($_FILES['photo']['name']):"")
    . ", socials=" . $socials
    . ", statut=" . ($db->quote($_POST['statut'])) . " WHERE id=" . $db->quote($_POST['id']);


if($_FILES['photo']['name']!='') {
    $upload_dir = '../../images/members/';
    include "../save_image.php";
}
$db->exec($req);
header('Location:manage_members.php');

?>