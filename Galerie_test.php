<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles/galerie_test.css" />
    <link rel="stylesheet" href="styles/template.css" />
    <title>Galerie photo</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".image_container").fancybox();
        });
    </script>
</head>

<body>

<?php include "templates/header.php";?>

<h1 class="page-title"><span class="t_photos_titre"></span> </h1>

<div id="images_zone">
    <div class="image_div">
        <a href="images/Test/image1.jpg" rel="group" class = "image_container">
            <img src="images/Test/image1.jpg" class="image"/>
        </a>
        <div class="description">Jack Sparrow</div>
    </div>

    <div class="image_div">
        <a href="images/Test/image2.jpg" rel="group" class = "image_container">
            <img src="images/Test/image2.jpg" class="image"/>
        </a>

        <div class="description">Jack Sparrow</div>
    </div>

</div>
<?php include "templates/footer.html";?>


</body>


