<?php
include "../redirect.php";
if(isset($_POST['username']) && isset($_POST['password'])) {
    require "../db/db_connect.php";
    $username = $_POST['username'];
    $response = $db->query("SELECT id, password FROM users WHERE username='$username'");
    $resultat = $response->fetch();

    //remember
    if(isset($_POST['remember'])) {
        setcookie('user_id', $resultat['id'] . "$" . sha1($username.$resultat['password'].$_SERVER['REMOTE_ADDR']), time() + 3600 * 24 * 3, '/', null, true, true);
    }
    if($resultat && password_verify($_POST['password'], $resultat['password'])) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['username'] = $username;
        header('Location:backside.php');
    } else {
        $erreur = "nom d'utilisateur ou mot de passe invalide";
    }
}
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="styles/login.css" />
</head>

<body>
<h1>Bienvenue</h1>
<p>Si tu es ici c'est que tu as découvert la légende. Peut-être la prophétie va-t-elle enfin se réaliser ?<br/>
    Avant tout tu vas devoir jurer fidélité aux Pirates des Carabed ou nous prouver que tu l'as déjà fait.</p>

<?php if(isset($erreur)) { print("<p class='error'>$erreur</p>");} ?>
<form action="" method="post">

    <label for="username">Nom de pirate:</label>
    <input id="username" name="username" type="text" required><br/><br/>
    <label for="password">Mot de passe:</label>
    <input id="password" name="password" type="password" required><br/><br/>
    <input id="remember" name="remember" type="checkbox" checked/><label for="remember">Qu'on se souvienne de moi</label><br/><br/>
    <input type="submit" value="Entrer"><br/><br/>
    <a href="register.php">Je n'ai pas encore prêté serment</a>
</form>
</body>
</html>