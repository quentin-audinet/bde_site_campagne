<?php
include 'db/db_connect.php';
$data = $db->query("SELECT * FROM members WHERE statut=2");

while($row = $data->fetch()) {
    $nom = $row["nom"];
    $surnom = $row["surnom"];
    $descrition = $row["description"];
    $photo = $row['photo'];
    $socials = $row['socials'];

    print('<div class="flippingcard">
            <h2 class="member-name">'.$nom.'</h2>
            <div class="card-single">
                <div class="face-front">
                    <img width = "100%" height = "100%" src="images/members/'.$photo.'" alt="Will Turner" />
                </div>
                <div class="face-back">
                    <p>'.$descrition.'</p>
                    <p class="socials">'.$socials.'</p>
                </div>
            </div>
        </div>');
}
?>


