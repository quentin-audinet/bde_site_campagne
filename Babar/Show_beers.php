<?php
include 'db/db_connect.php';
$data = $db->query("SELECT * FROM members WHERE statut=2");

while($row = $data->fetch()) {
    $nom = $row["nom"];
    $surnom = $row["surnom"];
    $descrition = $row["description"];
    $photo = $row['photo'];

    print('<div class="flippingcard">
            <h2>'.$nom.'</h2>
            <div class="card-single">
                <div class="face-front">
                    <img width = "300" height = "300" src="images/members/'.$photo.'" alt="Will Turner" />
                    <img src="images/skull_member.svg" class="skull" />
                </div>
                <div class="face-back">
                    <p>'.$descrition.'</p>
                </div>
            </div>
        </div>');
}
?>
