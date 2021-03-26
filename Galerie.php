<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles/galery.css" />
    <link rel="stylesheet" href="styles/template.css" />
    <title>Galerie photo</title>
</head>

<body>
    <?php include "templates/header.php";?>

    <h1 class="page-title"><span class="t_photos_titre"></span> </h1>

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
    </div>
    <?php include "templates/footer.html";?>
</body>


