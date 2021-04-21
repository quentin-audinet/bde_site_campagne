<?php include "redirect.php"; ?>
<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title class="t_sponsors">Nos sponsors</title>
    <link rel="stylesheet" href="styles/template.css" />
    <link rel="stylesheet" href="styles/partners.css" />
    <link rel="preload" href="images/chest_opening-min.gif" as="image" type="image/gif" />
</head>

<body>

    <?php
    include "templates/header.php";?>

    <div class="sponsors_container">
        <h1 class="page-title"><span class="t_sponsors_titre" /></h1>
        <div id="chest">
            <img id="chest_img" src="images/chest.png" alt="chest" />
            <script type="text/javascript" src="scripts/partners_anim_chest.js"></script>
        </div>
        <a href="https://evs.com" target="_blank"><img id="logo_0" class="logo" src="images/evs_logo.png" alt="EVS" /></a>
        <a href="https://www.cityscoot.eu" target="_blank"><img id="logo_1" class="logo" src="images/cityscoot_logo.png" alt="CityScoot" /></a>
        <a href="https://www.ocs.fr" target="_blank"><img id="logo_2" class="logo" src="images/ocs_logo.png" alt="OCS" /></a>

    </div>

    <?php
    include "templates/footer.html"?>
</body>
</html>