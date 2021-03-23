<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles/listeux.css" />
    <link rel="stylesheet" href="styles/template.css" />
    <title>Le Bon La Bed et le Truand - Les Listeux</title>
</head>

<body>
    <?php include "templates/header.php";?>
    <script type="text/javascript" src="scripts/listeux_anim_card.js"></script>

    <div id="bloc_titre">
        <p>Le Bon la Bed et le Truand - Les Listeux</p>
    </div>

    <h1>Le bureau</h1>
        <div id="bureau_cards">
            <?php
            include "scripts/show_bureau.php";
            ?>

        </div>

    <h1>Les listeux</h1>
    <div id="members_cards">
        <?php
        include "scripts/show_listeux.php";
        ?>
    </div>

    <h1>Les membres</h1>
        <div id="members_cards">
            <?php
            include "scripts/show_members.php";
            ?>
        </div>

    <?php include "templates/footer.html";?>
</body>
