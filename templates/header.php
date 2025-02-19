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

<header id="banner">
    <nav>
        <div id="main-banner">
            <a href="#banner" id="open">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="102px" height="96px" viewBox="0 0 102 100" enable-background="new 0 0 102 100" xml:space="preserve">
                    <rect y=0 fill="#FFFFFF" width="102" height="12"/>
                    <rect y=32 fill="#FFFFFF" width="102" height="12"/>
                    <rect y=64 fill="#FFFFFF" width="102" height="12"/>
                </svg>
            </a>
            <a href="#" id="close">x</a>
            <ul id="menu-items">
                <li><a href="index.php" class="menu"><span class="t_acceuil" /></a></li>
                <li><a href="news.php" class="menu"><span class="t_news" /></a></li>
                <li><a href="Agenda.php" class="menu"><span class="t_agenda" /></a></li>
                <li><a href="defis.php" class="menu"><span class="t_defis" /></a> </li>
                <li><a href="Listeux.php" class="menu"><span class="t_membres" /></a> </li>
                <li><a href="partners.php"class="menu"><span class="t_sponsors" /></a> </li>
                <li><a href="contact.php" class="menu"><span class="t_contact" /></a> </li>
                <li><a href="treasure_chase.php" class="menu"><span class="t_chase" /> </a> </li>
                <?php if(isset($_COOKIE['user_id'])) {
                    print("<li><a href='carabed/backside.php' class='menu'>Backside</a></li>");
                }?>
            </ul>
            <div id="language_selector" class="dropdown">
                <button onclick="chgLanguage()" class="dropbtn">▼&ensp;<img class="flag_menu" src="images/fr_flag.png" alt="French" /></button>
                <div id="dropdown_language" class="dropdown_content">
                    <span class="language" href="#" lang="fr">FR&ensp;<img class="flag" src="images/fr_flag.png" alt=""/></span>
                    <span class="language" href="#" lang="en">EN&ensp;<img class="flag" src="images/en_flag.png" alt=""></span>
                </div>
            </div>


            <script>
                for(let link of document.querySelectorAll("#menu-items li a")) {
                    link.addEventListener("click", () => {
                        link.setAttribute("href",link.getAttribute("href")+"?lang="+lang);
                    });
                }
            </script>
        </div>

        <div id="menu_bar"></div>

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