<?php
session_start();
if(!isset($_SESSION['maintainer'])) {
    header("Location:../login.php");
}

include "../../db/db_connect.php";

$date = $db->quote($_POST['date']);
$title = $db->quote($_POST['title']);
$challengers = $db->quote($_POST['challengers']);
$points = $db->quote($_POST['points']);
$description = $db->quote($_POST['description']);
$id = $db->quote($_POST['id']);



$req = "UPDATE challenges SET date=$date, titre=$title, description=$description, participants=$challengers, points=$points WHERE id=$id";
$db->exec($req);
header('Location:manage_challenges.php');
?>