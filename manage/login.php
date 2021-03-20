<!DOCTYPE html>
<html>
<header>
    <meta charset="UTF-8" />
    <title>Connexion</title>
    <script type="text/javascript" src="../scripts/jquery-1.5.2.min.js"></script>

</header>

<body>
<script>
    let mail = prompt("Mail");
    let password = prompt("Mot de passe");

    $.ajax({
        url: 'connect.php',
        type: 'POST',
        data: 'mail=' + mail + '&password=' + password,
        success: function (data) {
            if(data==="success")
                location.href = "index.php";
            if(data=="failed") {
                alert("Identifiants invalides !\nRetour à la page d'acceuil.");
                location.href = "../index.php";
            }

        }
    });
</script>
</body>
</html>