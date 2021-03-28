<?php
include "../redirect.php";
if(isset($_GET['username'])) {
    $username = $_GET['username'];
    include "../db/db_connect.php";
    $response = $db->query("SELECT id,username FROM users WHERE username='$username'");
    $result = $response->fetch();
    if($result) {
        $msg= "<h1>Félicitaion $username !</h1><p>Ton inscription s'est bien déroulée, tu peux désormais te rendre à l'acceuil <a href='backside.php'>ici</a>.</p>";
        $_SESSION['id'] = $result['id'];
        $_SESSION['username'] = $username;
        setcookie('user_id', '', time() -3600,  null, null, true, true);
    } else {
        $msg = "<h1>Aïe aïe aïe</h1><p>On dirait que tout ne s'est pas déroulé comme prévu... Essaie de nouveau de t'inscrire <a href='register.php'>ici</a>.</p>";
    }
} else {
    $msg = "<h1>Aïe aïe aïe</h1><p>On dirait que tout ne s'est pas déroulé comme prévu... Essaie de nouveau de t'inscrire <a href='register.php'>ici</a>.</p>";
}

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <title>S'enregistrer</title>
    <link rel="stylesheet" href="styles/register.css">
</head>

<body>
<?php print($msg); ?>
</body>