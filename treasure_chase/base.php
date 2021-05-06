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

$hints = getHint($_SESSION['username'], $level);

if(isset($_POST['use_hint'])) {
    $show_hint = true;
    useHint($_SESSION['username'], $level, $hints);
    $hints--;
}


if(isset($_GET['hint'])) {
    checkHint($_SESSION['username']);
    $hints = getHint($_SESSION['username'], $level);
    if($hints ==0) {
        $hint_form = "<h1 style='color: red; text-align: center'>Tu n'as plus d'indices !</h1>";
    } else {
        if ($hints != -1) {
            $hint_form = "<form action='' method='post'>
<h3>Tu as actuellement $hints indices. En utiliser un ?</h3>
<div><input type='checkbox' name='use_hint' id='use_hint'/><label for='use_hint'>Utiliser</label>
<input type='submit' value='envoyer'/></div>

</form>";
        } else {
            $show_hint = true;
        }
    }
}
?>