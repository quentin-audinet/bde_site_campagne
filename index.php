<?php include "redirect.php"; ?>
<!DOCTYPE html>
<!-- Ah enfin un curieux ! Une vieille légende raconte qu'un trésor se trouve sur ce site. Malheureusement j'ai perdu ce vieux fichier.....
     Si je me souviens bien il s'intitulait "legende.txt". A tous les coups je l'avais caché dans un dossier "secret" pour éviter que quelqu'un ne tombe dessus.
     Encore une bonne idée ça...-->

<!-- Si tu es bloqué tu peux négocier un indice avec Quentin Audinet -->

<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title class="t_acceuil">Acceuil</title>
    <link rel="stylesheet" href="styles/template.css" />
    <link rel="stylesheet" href="styles/acceuil.css" />

</head>

<body>

    <?php
    include "templates/header.php"; ?>

    <div id="acceuil">
        <img id="bureau" src="images/photo_bureau.png" alt="bureau" />
        <img id="parchemin" src="" alt="parchemin" />
        <p class="neon__text">Pirates des<br />Carabed</p>
    </div>
    <div style="height: 240px"></div>
    <h2>Bienvenue sur le site des Pirates des Carabed</h2>
    <p style="text-align: center">Vous trouverez ici toutes les informatons relatives à notre liste.<br/>Regardez à nouveau la vidéo de présentation de notre liste (Alban t'es  trop beau)</p>
    <iframe width="1244" height="700" src="https://www.youtube.com/embed/Gg_JAz5tzW4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <script>


        let text = document.querySelector("#acceuil p");
        text.style.visibility = "hidden";
        const anim_parchemin = () => {
            window.removeEventListener('scroll', check_anim);
            let parchemin = document.querySelector("#parchemin");
            parchemin.setAttribute("src", "images/parchemin.gif?rd="+Math.random()+"'");
            parchemin.style.visibility = "visible";
            text.setAttribute("style", "opacity:0");

            text.style.visibility = "visible";
            setTimeout(() => {
                for(let i=0; i<20;i++) {
                    setTimeout(() => {
                        text.setAttribute("style", "opacity:"+i/20);
                    },100*i);
                }
                text.removeAttribute("style");
            }, 900);
        }

        const check_anim = () => {
            let pageBottom = (scrollY + window.innerHeight);
            let parchemin = document.querySelector("#parchemin");
            let parcheminBottom = parchemin.getBoundingClientRect().bottom;
            if(pageBottom > parcheminBottom) {
                anim_parchemin();
            }
        };
        window.addEventListener('scroll', check_anim);
        setTimeout(check_anim, 200);
    </script>
    <?php
    include "templates/footer.html";
    ?>

</body>
</html>
