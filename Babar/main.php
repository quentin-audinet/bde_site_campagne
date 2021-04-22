<?php
include "functions.php";

if(isset($_POST['comment_name']) && isset($_POST['comment_message'])) {
    send_message($_POST['comment_name'], $_POST['comment_message']);
}

if(isset($_POST['chat_name']) && isset($_POST['chat_message'])) {
    post_chat($_POST['chat_name'], $_POST['chat_message']);
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title>Le blog de babar</title>
	</head>

    <body>
    <div id="main-title" ><img src="Images/babar.png" width="80px" height="80px"><h1>Le site du bar</h1><img src="Images/babar.png" width="80px" height="80px"></div>
        <ul id="beers" class="display-box">
            <span id="beers-title-box" class="box-title">
                <h1>Nos bières</h1>
            </span>

            <?php
            show_beers();
            ?>

        </ul>

        <ul id="events" class="display-box">
            <span id="beers-title-box" class="box-title">
                <h1>Nos prochains events</h1>
            </span>

            <?php show_events(); ?>
        </ul>

        <div style="grid-area: bottom" class="contact-box">
            <div>
                <h1 id="contact-title">Contactez-nous</h1>
                <h3 id="sub-contact-title">(On répondra quand on sera sobre)</h3>

                <div style="display: flex; align-items: center">
                    <a href="https://www.facebook.com/telecom.baritech" target="_blank"><img src="Images/fb_beer.png"></a>
                    <form action="" method="post">
                        <label for="nom">Nom :</label><br/>
                        <input type="text" id="nom" name="comment_name"/><br/>
                        <label for="message">Message :</label>
                        <textarea name="comment_message" id="message" rows="10" style="width: 190%"></textarea><br/>
                        <input type="submit" value="Envoyer" width="90%" />
                    </form>
                </div>
            </div>
        </div>

        <div id="chat-box">
            <h1>Chattons</h1>
            <form action="" method="post">
                <label for="chat_name">Nom</label>
                <input id="chat_name" name="chat_name" /><br/>
                <label for="chat_message">Message</label>
                <input id="chat_message" name="chat_message" />
                <input type="submit" value="envoyer">
            </form>
            <?php get_chat(); ?>

        </div>
    </body>





