<?php

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
?>
