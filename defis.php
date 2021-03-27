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

<div id="container">
    <p class="logo-liste" style="font-family: disco;font-size: 5em"><img src="images/logo_autres.png" height="200"/><br/>Born to BED alive</p>
    <div id="sabres">
        <img id="sabre-autres" src="images/sabre_autres_min.png"/>

        <img id="sabre-carabed" src="images/sabre_carabed_min.png" usemap="#image-map-min-carabed">
        <map id="map-carabed" name="image-map-min-carabed">
            <area id="area-carabed" target="_self" alt="" title="" href="carabed_defis.php" coords="97,543,134,505,175,477,225,444,192,391,195,372,212,366,243,367,291,408,402,300,469,193,512,110,558,118,611,98,681,52,671,99,627,193,568,272,468,361,370,428,322,455,333,512,324,577,287,626,231,653,154,640,103,586,94,608,69,620,43,608,36,589,44,563,61,552,86,555,76,519,84,518" shape="poly">
            <area id="area-autres" target="_self" alt="" title="" href="warning.html" coords="603,588,556,636,511,653,457,649,406,619,376,565,373,501,383,456,230,359,112,246,52,147,22,54,94,104,154,118,193,112,251,224,327,324,414,409,451,377,496,365,513,377,509,401,480,446,540,483,610,544,621,525,627,519,628,535,621,556,643,554,659,561,671,588,659,614,634,622,611,612" shape="poly">
        </map>

    </div>
    <p class="logo-liste" style="font-family: 'PiecesOfEight';font-size: 3.0em"><img  src="images/logo_carabed.png" height="200"/><br/>Pirates des Carabed</p>

</div>


<p id="qui-voter-link"><a href="https://pour-qui-faut-il-voter-bde-2021.epizy.com/" >Détails des défis des listes</a></p>



<script>
    image_carabed = document.getElementById("sabre-carabed");
    area_carabed = document.getElementById("area-carabed");


    area_carabed.setAttribute("href",area_carabed.getAttribute("href")+"?lang="+lang);

    area_carabed.addEventListener("mouseover", () => {
        image_carabed.setAttribute("src","images/sabre_carabed.png");
        area_carabed.setAttribute("coords","112,619,141,586,190,550,258,508,223,452,220,430,231,418,252,416,282,424,307,440,332,465,417,387,506,275,586,125,632,134,696,115,780,58,762,136,702,243,615,343,508,434,368,520,380,581,377,625,353,687,311,726,254,743,200,738,165,720,118,670,114,687,96,702,74,707,50,696,41,676,47,647,74,629,100,635,89,602,95,589");
    });
    area_carabed.addEventListener("mouseout", () => {
        image_carabed.setAttribute("src","images/sabre_carabed_min.png");
        area_carabed.setAttribute("coords","97,543,134,505,175,477,225,444,192,391,195,372,212,366,243,367,291,408,402,300,469,193,512,110,558,118,611,98,681,52,671,99,627,193,568,272,468,361,370,428,322,455,333,512,324,577,287,626,231,653,154,640,103,586,94,608,69,620,43,608,36,589,44,563,61,552,86,555,76,519,84,518");
    });

    image_autres = document.getElementById("sabre-autres");
    area_autres = document.getElementById("area-autres");
    area_autres.addEventListener("mouseover", () => {
        image_autres.setAttribute("src","images/sabre_autres.png");
        area_autres.setAttribute("coords","438,520,292,432,153,310,59,174,23,58,91,108,151,131,219,126,281,247,388,385,472,466,522,427,565,418,584,429,586,446,548,507,636,567,694,619,710,591,717,597,708,633,737,633,758,647,763,669,754,700,724,710,698,700,688,672,653,710,605,742,532,743,479,718,441,673,423,615,425,569");
    });
    area_autres.addEventListener("mouseout", () => {
        image_autres.setAttribute("src","images/sabre_autres_min.png");
        area_autres.setAttribute("coords","603,588,556,636,511,653,457,649,406,619,376,565,373,501,383,456,230,359,112,246,52,147,22,54,94,104,154,118,193,112,251,224,327,324,414,409,451,377,496,365,513,377,509,401,480,446,540,483,610,544,621,525,627,519,628,535,621,556,643,554,659,561,671,588,659,614,634,622,611,612");
    });

    area_autres.addEventListener("click", () => {
        alert("Es-tu sur ?");
    })


</script>
<?php include "templates/footer.html";?>

</body>
</html>