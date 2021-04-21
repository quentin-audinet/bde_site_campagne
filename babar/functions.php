<?php

function send_message($name, $message) {
    include "../db/db_connect.php";
    $req = "INSERT INTO babar (`name`, `message`) VALUES (". $db->quote($name) .", " . $db->quote($message) . ")";
    $db->query($req);
}