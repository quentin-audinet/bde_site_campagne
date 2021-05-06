<?php

$level = 3;
$answer = "bajak laut";
$hints=-1;
$hint = "<script>alert('Google Traduction et son mode de détection des langues est ton ami')</script>";
include "base.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Enigme 3</title>
    <link rel="stylesheet" href="enigmes.css" />

    <style>

        form {
            margin: auto;
            width: 40%;
            text-align: justify;
        }
    </style>
</head>

<body>
<header>
    <a href="enigmes.php">Retour</a>
    <a href="?hint=3">Indice</a>
</header>
<?php if(isset($hint_form)) {print($hint_form);} ?>

<div>
    <form action="" method="post">
        <h2>Traduis ce texte pour découvrir la réponse</h2>
        <p>Nakala hii hakika itakuwa chungu kutafsiri. Batalyonga umuman noma'lum bo'lgan tillar mavjud.Ви не уявляєте, який з них буде цікавим. Fortell i det minste deg selv at du oppdager nye språk. Carabeds får dig til at rejse hjem. Լավ, եկեք ձեռնամուխ լինենք գործի ... Ինչպե՞ս ստանամ պատասխանը: यो धेरै सरल छ, तपाईले उपस्थितिको क्रममा यो पाठको प्रत्येक भाषाको पहिलो अक्षर लिनु पर्छ। Dit vorm 'n nuwe taal. Svarið er þýðing orðsins „sjóræningi“ á þetta tungumál. Kabeneran anjeun! </p>
        <input type="text" id="answer" name="answer" /><input type="submit" value="Valider">
        <?php if(isset($result)) {print($result);} ?>
    </form>
    <?php if(isset($show_hint)){print($hint);} ?>

</div>
</body>
</html>