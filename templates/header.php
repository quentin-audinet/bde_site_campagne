<script>
    const url = document.location.href.substring(0,document.location.href.search(page));
    if(lang===undefined) {
        var lang = "fr";
    }
    document.documentElement.lang = lang;
</script>

<header>
    <nav id="banner">
        <ul>
            <li><a href="index.php"><span id="t_acceuil" /></a></li>
            <li><a href="#"><span id="t_agenda" /></a></li>
            <li><a href="#"><span id="t_defis" /></a> </li>
            <li><a href="Page_photos/Photos_listeux.html">Membres</a> </li>
            <li><a href="partners.php">Sponsors</a> </li>
            <li><a href="#">Espace Photo</a> </li>
            <li><a href="#">Nous contacter</a> </li>
        </ul>
        <div id="language_selector" class="dropdown">
            <button onclick="chgLanguage()" class="dropbtn">▼&ensp;<img class="flag_menu" src="images/fr_flag.png" alt="French" /></button>
            <div id="dropdown_language" class="dropdown_content">
                <a class="language" href="#" lang="fr">FR&ensp;<img class="flag" src="images/fr_flag.png" alt=""/></a>
                <a class="language" href="#" lang="en">EN&ensp;<img class="flag" src="images/en_flag.png" alt=""></a>
            </div>
        </div>

        <script>
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