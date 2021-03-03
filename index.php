<!DOCTYPE html>

<html lang="<?php echo $_COOKIE['lang']; ?>">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title class="t_acceuil">Acceuil</title>
    <link rel="stylesheet" href="styles/template.css" />
    <link rel="stylesheet" href="styles/acceuil.css" />
    <script>
        const page = "index.php";
    </script>
</head>

<body>

    <?php
    include "templates/header.php"; ?>


    <script>
        $.ajax({
            url: "scripts/test.php",
            success: function (result) {
                alert(result);
            }
        });
    </script>

    <div id="acceuil">
        <img id="bureau" src="images/photo_bureau.png" alt="bureau" />
        <img id="parchemin" src="images/parchemin.gif" alt="parchemin" />
        <p class="neon__text">Pirates des<br />Carabed</p>
        <!--<p class="neon__text"><span>&ensp;<br/>Pirates des<br/>&ensp;<br/> Carabed</span></p>-->
    </div>

    <script>
        document.querySelector("#parchemin").setAttribute("src", "images/parchemin.gif?rd="+Math.random()+"'");
        const text = document.querySelector("#acceuil p");
        text.setAttribute("style", "opacity:0");
        setTimeout(() => {
            for(let i=0; i<20;i++) {
                setTimeout(() => {
                    text.setAttribute("style", "opacity:"+i/20);
                },100*i);
            }
            text.removeAttribute("style");
        }, 900);
    </script>
    <?php
    include "templates/footer.html";
    ?>

</body>
</html>
