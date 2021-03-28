<?php
if(!isset($_SESSION))
    session_start();
if(!isset($_SESSION['admin']) && (!isset($_GET['carabed']) || $_GET['carabed']!="enter")) {
    $today = time();
    $release = mktime(4,4,0,3,31,2021);

    if($release - $today > 0) {
        header("Location:https://piratesdescarabed.rezel.fr/countdown.html");
    }
} else {
    $_SESSION['admin']=true;
}
?>