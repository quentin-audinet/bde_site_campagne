<?php
session_start();
if(!isset($_SESSION['maintainer'])) {
    header("Location:login.php");
}

include "../db/db_connect.php";

$date = $db->quote($_POST['date']);
$title = $db->quote($_POST['title']);
$challengers = $db->quote($_POST['challengers']);
$description = $db->quote($_POST['description']);
$points = $db->quote($_POST['points']);
$type = $db->quote($_POST['type']);
$source="";
if($type == "'video'") {
    $source = $db->quote($_POST['src_video']);
} else if ($type == "'image'") {
    $source = $db->quote("<img src='images/photos/".$_FILES['photo']['name']."' alt='photo' width='560'/>");
    $upload_dir = '../images/photos/';
    include "save_image.php";
} else{
    die("Format invalide");
}


$req = "INSERT INTO challenges (date, titre, participants, description, points, source) VALUES ($date, $title, $challengers, $description, $points,$source)";
$db->exec($req);

header('Location:manage_challenges.php');
?>