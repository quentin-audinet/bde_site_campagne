<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title class="t_acceuil">Acceuil</title>
    <link rel="stylesheet" href="styles/template.css" />
    <link rel="stylesheet" href="styles/acceuil.css" />

    <!-- Ah enfin un curieux ! Une vieille légende raconte qu'un trésor se trouve sur ce site. Malheureusement j'ai perdu ce vieux fichier.....
         Si je me souviens bien il s'intitulait "legende.txt". A tous les coups je l'avais caché dans un dossier secret pour éviter que quelqu'un ne tombe dessus.
         Encore une bonne idée ça...-->

    <!-- Si tu es bloqué tu peux négocier un indice avec Quentin Audinet -->
</head>

<body>

    <?php
    include "templates/header.php"; ?>

    <div id="acceuil">
        <img id="bureau" src="images/photo_bureau.png" alt="bureau" />
        <img id="parchemin" src="" alt="parchemin" />
        <p class="neon__text">Pirates des<br />Carabed</p>
    </div>

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
