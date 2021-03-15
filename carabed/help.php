<?php
include "conf.php";
$hint = $db->query("SELECT hint FROM users WHERE username='".$_SESSION['username']."'")->fetch()[0];
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8" />
    <title>Aide</title>
    <link rel="stylesheet" href="styles/help.css" />
    <link rel="stylesheet" href="styles/header.css" />
</head>

<body>
<?php include "header.html"; ?>

<h1>Tu es bloqué ?</h1>
<p>Tu disposes de <?php print($hint); ?> indices utilisables sur n'importes quels défis. Si jamais tu es vraiment bloqué, ou que tu n'as plus d'indices contacte @Quentin Audinet.</p>
<p>Tu peux aussi gagner des indices en accomplisasnt certains défis.</p>

<div id="hint_images">
    <?php

    for($i=0; $i<$hint; $i++) {
        if($i<$hint) {
            print('<img src="../images/burning-skull.svg" width="200px" />');
        }
    }
    ?>
</div>
</body>

</html>