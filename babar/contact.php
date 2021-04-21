<?php
include "functions.php";
if(isset($_POST['nom']) && isset($_POST['message'])) {
    send_message($_POST['nom'], $_POST['message']);
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Nous contacter</title>

    <style>

        @font-face {
            font-family: Caribbean;
            src: url("../fonts/Caribbean.ttf");
        }
        body {
            background-color: #de2f9d;
        }

        h1 {
            font-family: Caribbean;
        }

        h3 {
            font-style: italic;
        }
    </style>
</head>

<body>
    <h1>Contactez-nous</h1>
    <h3>(On répondra quand on sera sobre)</h3>
    
    <img src="../images/babar/babar.png">

    <a href=""><img src="../images/babar/fb_beer.png"></a>
<form action="" method="post">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom"/><br/>
    <label for="message">Message</label>
    <textarea name="message" id="message" cols="150" rows="10"></textarea><br/>
    <input type="submit" value="Envoyer" />
</form>

</body>
</html>