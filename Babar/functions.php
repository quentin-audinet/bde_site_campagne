<?php

function send_message($name, $message) {
    include "../db/db_connect.php";
    $req = "INSERT INTO babar_comments (`name`, `message`) VALUES (". $db->quote($name) .", " . $db->quote($message) . ")";
    $db->query($req);
}

function show_beers()
{
    include '../db/db_connect.php';
    $data = $db->query("SELECT * FROM babar_beers");

    while ($row = $data->fetch()) {
        $nom = htmlspecialchars($row["name"]);
        $img = htmlspecialchars($row["img"]);
        $descrition = htmlspecialchars($row["description"]);
        $prix = htmlspecialchars($row["price"]);

        print("<span class='in-display-box'>
                <span class='title'>$nom</span>
                <img class='image' src='$img' width = '200' height='200'>
                <p class='descr'>$descrition</p>
                <p class='price-date'>$prix €</p>
            </span>");
    }
}


function show_events(){
    include '../db/db_connect.php';
    $data = $db->query("SELECT * FROM babar_events");

    while ($row = $data->fetch()) {
        $nom = htmlspecialchars($row["name"]);
        $img = htmlspecialchars($row["img"]);
        $descrition = htmlspecialchars($row["description"]);
        $date = htmlspecialchars($row["date"]);

        print("<span class='in-display-box'>
                <span class='title'>$nom</span>
                <img class='image' src='$img' width = '200' height='200'>
                <p class='descr'>$descrition</p>
                <p class='price-date'>$date</p>
            </span>");
    }
}

function post_chat($name, $message) {
    include "../db/db_connect.php";
    $req = "INSERT INTO babar_chat (`name`, `message`) VALUES (" . $db->quote($name) . ", " . $db->quote($message) . ")";
    $db->query($req);
}

function get_chat() {
    include "../db/db_connect.php";
    $req = "SELECT * FROM babar_chat ORDER BY 'date' DESC";
    $data = $db->query($req);
    while($row = $data->fetch()) {
        print("<div class='chat'><span class='name'>". htmlspecialchars($row['name'])."</span> : <span class='message'>". htmlspecialchars($row['message']) ."</span></div>    
        ");
    }
}
?>