<?php include "redirect.php"; ?>
<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="styles/listeux.css" />
        <link rel="stylesheet" href="styles/template.css" />
        <link rel="stylesheet" href="styles/fontawesome/css/fontawesome.css" />
        <link rel="stylesheet" href="styles/fontawesome/css/solid.css" />
        <link rel="stylesheet" href="styles/fontawesome/css/brands.css" />
        <title>Les Listeux</title>
    </head>

    <body>
        <?php include "templates/header.php";?>
        <script type="text/javascript" src="scripts/listeux_anim_card.js"></script>

        <h1 class="page-title"><span class="t_membres_titre"></span> </h1>

        <h1>Le bureau</h1>
        <?php include "scripts/show_members.php"; ?>
            <div id="bureau_cards">
                <?php
                showMember(1);
                ?>

            </div>

        <h1>Les listeux</h1>
        <div id="members_cards">
            <?php
            showMember(2);
            ?>
        </div>

        <h1>Les soutiens</h1>
            <div id="members_cards">
                <?php
                showMember(0);
                ?>
            </div>

        <?php include "templates/footer.html";?>
    </body>
</html>