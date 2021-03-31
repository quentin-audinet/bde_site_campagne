<?php
//Vérifier que toutes les données on été renseignées
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['serment'])) {

    //vérifier qu'il y a un mot de passe
    if(strlen($_POST['password']) == 0) {
        $erreur = "Et le mot de passe ?";
    } else {
        $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $username = $_POST['username'];

        //Vérifier que le nom d'utilisateur est correct
        if (preg_match("#^[a-zA-Z0-9_]+$#", $username)) {
            include "../db/db_connect.php";
            $response = $db->query("SELECT * FROM users WHERE username='$username'");

            //Vérifier que le nom n'est pas déjà pris
            if ($response->fetch()) {
                $erreur = "Un autre pirate porte déjà ce nom. Je suis désolé...";
            } else {
                $db->exec("INSERT INTO users (username, password) VALUES ('$username', '$pass_hash')");
                header('Location:registered.php?username=' . $username);
            }
        } else {
            $erreur = "Le format du nom est incorect ! Il doit comporter des lettres, des chiffres et éventuellement \"_\"";
        }
    }
}

?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8" />
    <title>Prêter serment</title>
    <link rel="stylesheet" href="styles/register.css" />
</head>

<body>
<h1>Je souhaite prêter serment</h1>
<?php
if(isset($erreur)) {
    print("<h2>$erreur</h2>");
}
?>
<form action="" method="post">
    <label for="username">Choisis ton nom de pirate:</label><input  id="username" name="username" type="text" required/><br/><br/>
    <label for="password">Trouve ton mot de passe:</label><input id="password" name="password" type="password" required/><br/><br/>
    <input id="serment" name="serment" type="checkbox" required/><label for="serment"> Je prête serment (Ceci n'engage en rien à voter pour Pirate des Carabed, sache seulement que je sais où tu habites et que si on perd je serai de très mauvaise humeur)</label><br/><br/>
    <div id="buttons">
        <input type="submit" value="Valider" class="button" />
        <button id="back" class="button">Retour</button>
    </div>
</form>
<script>
    const serment_box =document.getElementById("serment");
    serment_box.oninvalid = (e) => {
        e.target.setCustomValidity("");
        if(!e.target.validity.valid) {
            e.target.setCustomValidity("Cocher cette case est fortement recommandé.");
        }
    };
    serment_box.oninput = (e) => {
        e.target.setCustomValidity("");
    }


    document.getElementById("back").addEventListener("click", (event) => {
        event.preventDefault();
        document.location = "login.php";
    })
</script>

</body>
</html>