<script>
    //Définir la langue sur français si aucune n'est définie
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    lang = urlParams.get('lang');
    if(lang===null || ["fr","en"].indexOf(lang)<0) {
        var lang = "fr";
    }
    document.documentElement.lang = lang;
</script>

<header>
    <nav id="banner">
        <ul>
            <li><a href="index.php"><span class="t_acceuil" /></a></li>
            <li><a href="#"><span class="t_agenda" /></a></li>
            <li><a href="#"><span class="t_defis" /></a> </li>
            <li><a href="Listeux.php"><span class="t_membres" /></a> </li>
            <li><a href="partners.php"><span class="t_sponsors" /></a> </li>
            <li><a href="Galerie.php"><span class="t_photos" /></a> </li>
            <li><a href="contact.php"><span class="t_contact" /></a> </li>
            <?php if(isset($_COOKIE['user_id'])) {
                print("<li><a href='carabed/backside.php'>Backside</a></li>");
            }?>

            <script>
                for(let link of document.querySelectorAll("#banner ul li a")) {
                    link.addEventListener("click", () => {
                        link.setAttribute("href",link.getAttribute("href")+"?lang="+lang);
                    });
                }
            </script>
        </ul>

        <div id="language_selector" class="dropdown">
            <button onclick="chgLanguage()" class="dropbtn">▼&ensp;<img class="flag_menu" src="images/fr_flag.png" alt="French" /></button>
            <div id="dropdown_language" class="dropdown_content">
                <span class="language" href="#" lang="fr">FR&ensp;<img class="flag" src="images/fr_flag.png" alt=""/></span>
                <span class="language" href="#" lang="en">EN&ensp;<img class="flag" src="images/en_flag.png" alt=""></span>
            </div>
        </div>

        <script>

            document.querySelector("#language_selector button img").setAttribute("src", "images/"+lang+"_flag.png");
            const chgLanguage = () => {
                document.getElementById("dropdown_language").classList.toggle("show");
            };

            window.onclick = function(event) {
                if(!event.target.matches('.dropbtn') && !event.target.matches('.flag_menu')) {
                    const dropdowns = document.getElementsByClassName("dropdown_content");
                    for(let i = 0; i < dropdowns.length; i++) {
                        const openDropdown = dropdowns[i];
                        if(openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            };
            for(let link of document.getElementsByClassName("language")) {
                link.addEventListener("click", (e) => {
                    e.preventDefault();
                    lang = link.lang;
                    document.querySelector("#language_selector button img").setAttribute("src","images/"+lang+"_flag.png");
                    document.documentElement.lang = lang;
                    reload_language();
                })
            }
        </script>
    </nav>
</header>

<section class="content">
    <div class="show_zone">