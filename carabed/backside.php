<?php require "conf.php";

if(!isset($_SESSION['username'])) {
    header('Location:login.php');
}

function getLastMessages() {
    $response = $db->query("SELECT username, message, date FROM chat JOIN users ON user_id=users.id ORDER BY date DESC LIMIT 10");
}

function sendMessage($message) {
    $db->exec("INSERT INTO chat (user_id, message, date) VALUES (".$_SESSION['id'].", '$message', '".$_SESSION['username']."')");
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" />
        <title class="t_welcome">Bienvenue !</title>
        <link rel="stylesheet" href="styles/back_acceuil.css" />

    </head>

    <body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.php">Sortir</a></li>
                <li><a href="#">Défis</a></li>
                <li><a href="#">Pirates</a></li>
                <li><a href="#">Chat</li>
                <li><a href="#">Aide</a> </li>
                <li><a href="logout.php">Déconnexion</a> </li>
            </ul>
        </nav>
    </header>

    <div id="content">

        <section id="left_panel">
            <aside id="profile">
                <h2>Profil</h2>
            </aside>

            <aside id="chat">
                <h2>Chat</h2>
                <?php ?>
                <input id="message" type="text" /><button id="send_message_btn" >Envoyer</button>
                <script>
                    document.getElementById("send_message_btn").addEventListener("click", () => {
                        const message = document.getElementById("message").value;
                    });
                </script>
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
        </aside>
    </div>
    </body>
</html>