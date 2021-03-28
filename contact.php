<?php include "redirect.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title class="t_contact">Nous contacter</title>
    <link rel="stylesheet" href="styles/template.css" />
    <link rel="stylesheet" href="styles/contact.css" />
    <link rel="stylesheet" href="styles/fontawesome/css/fontawesome.css" />
    <link rel="stylesheet" href="styles/fontawesome/css/brands.css" />
    <link rel="stylesheet" href="styles/fontawesome/css/solid.css" />
    <script type="text/javascript" src="scripts/jquery-1.5.2.min.js"></script>
    <script type="text/javascript" src="scripts/map_zoom.js"></script>
</head>

<body>

<?php include "templates/header.php"; ?>

<h1 class="page-title"><span class="t_contact_titre"></span> </h1>

<div class="map_container">
    <canvas id="map_panel" width="1000" height="513"></canvas>
    <div class="facebook"><a href="https://www.facebook.com/Pirates-des-Carabed-112635134247893" target="_blank"><i class="fab fa-facebook-f fa-2x" aria-hidden="true"></i></a></div>
    <div class="instagram"><a href="https://www.instagram.com/carabed_" target="_blank"><i class="fab fa-instagram fa-2x" aria-hidden="true"></i></a></div>
    <div class="mail"><a href="mailto:piratedescarabed@gmail.com"><i class="fas fa-envelope fa-2x" aria-hidden="true"></i></a></div>
    <div class="tiktok"><a href="https://vm.tiktok.com/ZMeUbDXCt" target="_blank"><i class="fab fa-tiktok fa-2x" aria-hidden="true"></i></a></div>
    <div class="twitch"><a href="#"><i class="fab fa-twitch fa-2x" aria-hidden="true"></i></a></div>
    <div class="<?php if(isset($pass)) {echo 'un'; } ?>lock"><a href="#"><i class="fas fa-<?php if(isset($pass)) {echo 'un'; } ?>lock fa-2x" aria-hidden="true"></i></a></div>

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

<div class="contact-mobile">
    <a class="social-btn btn-fb" href="https://www.facebook.com/Pirates-des-Carabed-112635134247893" target="_blank"><i class="fab fa-facebook"></i><span>Facebook</span></a>
    <a class="social-btn btn-insta" href="https://www.instagram.com/carabed_" target="_blank"><i class="fab fa-instagram"></i><span>Instagram</span></a>
    <a class="social-btn btn-mail" href="mailto:piratedescarabed@gmail.com"><i class="fas fa-envelope"></i><span>Mail</span></a>
    <a class="social-btn btn-twitch" href="#"><i class="fab fa-twitch"></i><span>Twitch</span></a>
    <a class="social-btn btn-tiktok" href="https://vm.tiktok.com/ZMeUbDXCt" target="_blank"><i class="fab fa-tiktok"></i><span>TikTok</span></a>

</div>

<?php include "templates/footer.html"; ?>
</body>

</html>