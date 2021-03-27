<?php include "redirect.php"; ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles/galery.css" />
    <link rel="stylesheet" href="styles/template.css" />
    <title>Galerie photo</title>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".image_container").fancybox();
        });
    </script>
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
            <a href="images/photos/'. $row['nom'] .'" rel="group" class="image_container">
            <img class = "image" src="images/photos/' . $row['nom'] . '"/>
            </a>
            <div class="description">' . $row['description'] . '</div>
        </div>
            ');
        }
        ?>
    </div>
    <?php include "templates/footer.html";?>
</body>


