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
        if($level==8) {
            $date = date('Y-m-d H:i:s');
            $req = "UPDATE players SET level=" . ($level + 1) . ", date='$date' WHERE username=" . $db->quote($username);
        } else {
            $req = "UPDATE players SET level=" . ($level + 1) . " WHERE username=" . $db->quote($username);
        }
        $db->exec($req);
    }

}

function checkHint($username) {
    include "../db/db_connect.php";
    $req = "SELECT last_hint,hints FROM players WHERE username=" . $db->quote($username);
    $data = $db->query($req);
    if($row = $data->fetch()) {
        $last = $row['last_hint'];
        $user_hints = $row['hints'];
        $curr_date = date('Y-m-d H:i:s');
        $delta = strtotime($curr_date) - strtotime($last);
        $hints_to_add = floor(($delta) / (60*15));
        $time_left = $delta % (60*15);
        $new_last_hint = date('Y-m-d H:i:s', strtotime($curr_date) - $time_left);
        $req = "UPDATE players SET hints=".($hints_to_add+$user_hints).", last_hint='$new_last_hint' WHERE username=" . $db->quote($username);
        $db->exec($req);
    }
}

function getHint($username, $level) {
    include "../db/db_connect.php";
    $req = "SELECT hints, hints_used FROM players WHERE username=".$db->quote($username);
    $data = $db->query($req);
    if($row = $data->fetch()) {
        $used = $row['hints_used'];
        $hints = $row['hints'];
        if(($used >> ($level-1))&1) {
            return -1;
        } else {
            return $hints;
        }
    }
}

function useHint($username, $level, $hints) {
    if($hints>0) {
        include "../db/db_connect.php";
        $req = "SELECT hints_used FROM players WHERE username=" .$db->quote($username);
        $data = $db->query($req);
        if($row = $data->fetch()) {
            $used = $row['hints_used'];
            $new_used = $used | (1 << ($level-1));
            $req = "UPDATE players SET hints=".($hints-1).", hints_used=$new_used WHERE username=".$db->quote($username);
            $db->exec($req);
        }


    }
}