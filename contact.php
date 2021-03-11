<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title class="t_contact">Nous contacter</title>
    <link rel="stylesheet" href="styles/template.css" />
    <link rel="stylesheet" href="styles/contact.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script type="text/javascript" src="scripts/jquery-1.5.2.min.js"></script>
    <script type="text/javascript" src="scripts/map_zoom.js"></script>
</head>

<body>

<?php include "templates/header.php"; ?>
<div class="map_container">
    <canvas id="map_panel" width="1000" height="513"></canvas>
    <div class="facebook"><a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></div>
    <div class="instagram"><a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></div>
    <div class="mail"><a href="#"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></a></div>
    <div class="<?php if(isset($pass)) {echo 'un'; } ?>lock"><a href="#"><i class="fa fa-<?php if(isset($pass)) {echo 'un'; } ?>lock fa-2x" aria-hidden="true"></i></a></div>

    <!-- Il y a peut être des choses à découvrir sur ce site... -->
    <script>
        document.getElementsByClassName("<?php if(isset($pass)) {echo 'un'; } ?>lock")[0].addEventListener("click", (e) => {
            e.stopPropagation();
            e.preventDefault();
            <?php
            if(!isset($pass)) {
                echo 'alert("tiens tiens tiens");';
            } else {
                echo 'open("index.php", "_self");';
            }
            ?>
        })
    </script>

</div>

<?php include "templates/footer.html"; ?>
</body>

</html>