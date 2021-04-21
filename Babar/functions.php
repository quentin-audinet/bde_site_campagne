<?php

function send_message($name, $message) {
    include "../db/db_connect.php";
    $req = "INSERT INTO babar (`name`, `message`) VALUES (". $db->quote($name) .", " . $db->quote($message) . ")";
    $db->query($req);
}

function show_beers()
{
    include '../db/db_connect.php';
    $data = $db->query("SELECT * FROM babar_beers");

    while ($row = $data->fetch()) {
        $nom = $row["name"];
        $img = $row["img"];
        $descrition = $row["description"];
        $prix = $row["prix"];

        print("<span class='in-display-box'>
                <span class='title'>$nom</span>
                <img class='image' src='$img' width = '200' height='200'>
                <p class='descr'>$descrition</p>
                <p class='price-date'>$prix</p>
            </span>");
    }
}