<?php
if(session_status() != 2) {
    session_start();
}

function getUserLevel($username) {
    include "../db/db_connect.php";

    $req = "SELECT level FROM players WHERE username=" . $db->quote($username);
    $user_level = $db->query($req)->fetch()['level'];

    return $user_level;
}

function checkLevel($username, $level) {

    return $level <= getUserLevel($username);
}

function checkAnswer($user_answer, $answer) {
    if($answer === $user_answer) {
        return true;
    }
    else {
        return false;
    }
}

function addLevel($username, $curr_level) {
    include "../db/db_connect.php";
    $level = getUserLevel($username);
    if($level==$curr_level) {
        $req = "UPDATE players SET level=" . ($level + 1) . " WHERE username=" . $db->quote($username);
        $db->exec($req);
    }

}