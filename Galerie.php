<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles/galery.css" />
    <link rel="stylesheet" href="styles/template.css" />
    <title>Galerie photo</title>
</head>

<body>
    <?php include "templates/header.php";?>
    <div id="images_zone">

        <?php
        include "db/db_connect.php";
        $response = $db->query("SELECT * FROM photos ORDER BY id DESC");
        while($row = $response->fetch()) {
            print('
            <div class="image_div">
            <img class = "image" src="images/photos/' . $row['nom'] . '"/>
            <div class="description">' . $row['description'] . '</div>
        </div>
            ');
        }
        ?>

        <div class="image_div">
            <img class = "image" src="Galerie_photos/Bateau.jpg"/>
            <div class="description">Aujourd'hui, Jack Sparrow mange son casse-croûte</div>
        </div>
        <div class="image_div">
            <img class = "image" src="Galerie_photos/Boussole.jpeg"/>
            <div class="description">Aujourd'hui, Jack Sparrow mange son casse-croûte</div>
        </div>
        <div class="image_div">
            <img class = "image" src="Galerie_photos/Jack_sparrow.jpg"/>
            <div class="description">Aujourd'hui, Jack Sparrow mange son casse-croûte</div>
        </div>
        <div class="image_div">
            <img class = "image" src="Galerie_photos/Photo_famille.jpg"/>
            <div class="description">Aujourd'hui, Jack Sparrow mange son casse-croûte</div>
        </div>
        <div class="image_div">
            <img class = "image" src="Galerie_photos/Poupee_vaudou.jpg"/>
            <div class="description">Aujourd'hui, Jack Sparrow mange son casse-croûte</div>
        </div>
    </div>
    <?php include "templates/footer.html";?>
</body>


