<?php
include "redirect.php";
require "conf.php";
if(!isset($_SESSION['username'])) {
    header('Location:login.php');
}

function sendMessage($message)
{
    if(!empty($message)) {
        require "../db/db_connect.php";
        $req = $db->prepare("INSERT INTO chat (`user_id`, `message`) VALUES (:id, :message)");
        $req->execute(array(
            'id' => $_SESSION['id'],
            'message' => $message
        ));
    }
}

if(isset($_POST['message'])) {
    sendMessage($_POST['message']);
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" />
        <title class="t_welcome">Bienvenue !</title>
        <link rel="stylesheet" href="styles/back_acceuil.css" />
        <link rel="stylesheet" href="styles/header.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    </head>

    <body>
<?php include "header.html"; ?>

    <div id="content">

        <section id="left_panel">

            <aside id="chat">
                <h2>Chat</h2>
                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $("#mini_chat").load("get_messages.php",{});
                       const refreshId = setInterval(function () {
                               $("#mini_chat").load("get_messages.php",{});},5000);
                       $.ajaxSetup({
                           cache:false
                       });
                    });
                </script>

                <div id="mini_chat">
                </div>
                <form action="" method="post">
                    <input id="message" name="message" type="text" /><button style="background: none;border: none"><i class="fa fa-paper-plane fa-2x" aria-hidden="true"></i></button>
                </form>
            </aside>
        </section>

        <section id="main_content">
            <h1>Bien le bonjour <?php print($_SESSION['username']); ?> !</h1>
            <p>Voici la face cachée des Pirates des Carabed. Ici tu trouveras des défis à réaliser afin de marquer des points et tenter de remporter le trésor des Carabed.</p>
            <p>Pas besoin d'être un hackeur ou d'avoir des milliers de points sur Root-me pour faire les défis (même si ça aide).</p>
            <p>Il y a deux catégories de défis :
            <ul>
                <li><b>L'histoire des carabed :</b> Une succession de quêtes qui te feront découvrir l'hisoire des Carabed</li>
                <li><b>Défis libres :</b> Des défis sans ordre particulier en tout genre. Fais-en le plus possible pour gagner des points !</li>
            </ul>
            </p>
        </section>


        <aside id="classement">
            <h2>Classement</h2>
            <div class="ranks">
            <?php
            $results = $db->query("SELECT `username`, `score`, `level` FROM users ORDER BY score DESC LIMIT 3");
            $i=1;
            while($row = $results->fetch()) {
                print("<pre>#$i  ".$row['username']."(".$row['level'].") - ".$row['score']."</pre>");
                $i++;
            }
            $res = $db->query("SELECT COUNT(*) FROM users WHERE score >= (SELECT score FROM users WHERE username='".$_SESSION['username']."')");
            $rank = $res->fetch()[0];
            switch ($rank) {
                case 1:
                    print("Félicitaion tu es premier ! Ne te laisse pas dépasser si tu veux la récompense.");
                    break;
                case 2:
                    print("2ème ! Tu y es presque ! Quelques défis et à toi le trésor.<br>PS: Tuer le premier ne te donnera pas la récompense.");
                    break;
                case 3:
                    print("Bravo tu es sur le podium. Quelques efforts supplémentaires et tu pourras prétendre au trésor des Carabed.");
                    break;
                default:
                    $res = $db->query("SELECT username,score,level FROM users WHERE id=".$_SESSION['id']);
                    $user = $res->fetch();
                    print("<pre>#$rank  ".$user['username']."(".$user['level'].") - ".$user['score']."</pre>");
            }
            ?>
            </div>
        </aside>
    </div>
    </body>
</html>