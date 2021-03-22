<?php
session_start();
if(!isset($_SESSION['maintainer'])) {
    header("Location:login.php");
}
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Gestion des défis</title>
    <link rel="stylesheet" href="../styles/template.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />


</head>

<body>
<?php include "header.php"; ?>

<section class="content">
    <div class="show_zone">

        <h1>Gestion des défis de la liste</h1>

        <?php include "../db/db_connect.php";
        $response = $db->query("SELECT * FROM challenges");
        while($row = $response->fetch()) {
            print('
            
            ');
        }
        ?>

        <form enctype="multipart/form-data" action="add_challenge.php" method="post">
            <input type="date" name="date" />
            <input type="text" name="title" placeholder="Titre du défi"/>
            <label for="challengers">Participants (séparés par une ",") : </label><input type="text" name="challengers" placeholder="XXX YYY,XXX YYY"/>
            <textarea name="description" placeholder="Description du défi"></textarea>
            <label for="points">Points :</label><input type="number" id="points" name="points" />
            <select name="type" id="type">
                <option value="video">Vidéo</option>
                <option value="image">Image</option>
            </select>
            <input id="video-opt" type="text" name="src_video"/>
            <input id="image-opt" type="file" name="photo" hidden/>
            <button><span class="fa fa-edit"></span> </button>
        </form>

        <script>
            document.getElementById("type").addEventListener('change', (e) => {
                if(e.target.value === "video") {
                    document.getElementById("video-opt").removeAttribute("hidden");
                    document.getElementById("image-opt").setAttribute("hidden","1");
                } else if (e.target.value === "image") {
                    document.getElementById("video-opt").setAttribute("hidden","1");
                    document.getElementById("image-opt").removeAttribute("hidden");
                }
            });
        </script>



    </div>
</section>
</body>