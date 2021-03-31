<?php include "redirect.php"; ?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8" />
    <title class="t_defis">Défis</title>
    <link rel="stylesheet" href="styles/template.css" />
    <link rel="stylesheet" href="styles/defis.css" />
</head>

<body>
<?php include "templates/header.php";?>
<script>
    if(window.matchMedia("(max-device-width: 600px").matches) {
        location.href = "carabed_defis.php";
    }
</script>
<div id="container">
    <p class="logo-liste" style="font-family: 'PiecesOfEight';font-size: 2.5vw"><img  src="images/logo_carabed.png"/><br/>Pirates des Carabed</p>
    <div id="sabres">
        <img id="sabre-autres" src="images/sabre_autres_min.png"/>

        <img id="sabre-carabed" src="images/sabre_carabed_min.png" usemap="#image-map-min-carabed">
        <map id="map-carabed" name="image-map-min-carabed">
            <area id="area-carabed" target="_self" alt="" title="" href="carabed_defis.php" coords="97,543,134,505,175,477,225,444,192,391,195,372,212,366,243,367,291,408,402,300,469,193,512,110,558,118,611,98,681,52,671,99,627,193,568,272,468,361,370,428,322,455,333,512,324,577,287,626,231,653,154,640,103,586,94,608,69,620,43,608,36,589,44,563,61,552,86,555,76,519,84,518" shape="poly">
            <area id="area-autres" target="_self" alt="" title="" href="warning.html" coords="603,588,556,636,511,653,457,649,406,619,376,565,373,501,383,456,230,359,112,246,52,147,22,54,94,104,154,118,193,112,251,224,327,324,414,409,451,377,496,365,513,377,509,401,480,446,540,483,610,544,621,525,627,519,628,535,621,556,643,554,659,561,671,588,659,614,634,622,611,612" shape="poly">
        </map>

    </div>

    <p class="logo-liste" style="font-family: disco;font-size: 4vw"><img src="images/logo_autres.png"/><br/>Born to BED alive</p>
    <script type="text/javascript" src="scripts/sabres_anim.js"></script>
</div>
<div id="middle-size">
    <p class="logo-liste-15p" style="font-family: 'PiecesOfEight';font-size: 2.5vw"><img  src="images/logo_carabed.png"/><br/>Pirates des Carabed</p>
    <p class="logo-liste-15p" style="font-family: disco;font-size: 4vw"><img src="images/logo_autres.png"/><br/>Born to BED alive</p>
</div>
<p class="logo-liste" style="text-align: center;font-family: cursive;font-size: 3vw"><img src="images/bedzirs.jpg" /><br/>Bedzir de France</p>


<p id="qui-voter-link"><a href="https://pour-qui-faut-il-voter-bde-2021.epizy.com/" >Détails des défis des listes</a></p>

<?php include "templates/footer.html";?>

</body>
</html>