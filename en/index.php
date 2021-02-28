<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Acceuil</title>
    <link rel="stylesheet" href="../styles/template.css" />
    <link rel="stylesheet" href="../styles/acceuil.css" />
    <script>
        const page = "index.php";
    </script>
</head>

<body>

    <?php
    include "templates/header.html"; ?>

    <div id="acceuil">
        <img src="../images/photo_bureau.png" alt="bureau" />
        <p class="neon__text"><span>&ensp;<br/>Pirates des<br/>&ensp;<br/> Carabed</span></p>
    </div>

    <script>
        document.querySelector("#acceuil > p").setAttribute("style", "background-image: url('../images/parchemin.gif?rd="+Math.random()+"'");
        const text = document.querySelector("#acceuil p > span");
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
