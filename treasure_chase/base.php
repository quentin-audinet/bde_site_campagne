<?php
session_start();

if(!isset($level)) {
    $level = 0;
}
if(!isset($answer)) {
    $answer = "";
}

if(!isset($_SESSION['username'])) {
    header("Location: create_account.php");
}
include "functions.php";

if(!checkLevel($_SESSION['username'], $level)) {
    header("Location: enigmes.php");
}

if(isset($_POST['answer'])) {
    if(checkAnswer(strtolower($_POST['answer']), $answer)) {
        addLevel($_SESSION['username'], $level);
        $result = "<p class='result correct'>Correct !</p>";
    }
    else {
        $result = "<p class='result incorrect'>incorrect</p>";
    }
}
?>