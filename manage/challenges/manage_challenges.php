<?php
session_start();
if(!isset($_SESSION['maintainer'])) {
    header("Location:../login.php");
}
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Gestion des défis</title>
    <link rel="stylesheet" href="../../styles/template.css" />
    <link rel="stylesheet" href="../../styles/manage_challenges.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />


</head>

<body>
<?php include "../header.php"; ?>

<section class="content">
    <div class="show_zone">


        <h1>Ajouter un défi</h1>
        <form enctype="multipart/form-data" action="add_challenge.php" method="post" id="add-challenge-form">
            <div>
            <input type="date" name="date" />
            <input type="text" name="title" placeholder="Titre du défi"/><br/>
            </div><div>
            <label for="challengers">Participants (séparés par une ",") : </label><input type="text" id="challengers" name="challengers" placeholder="XXX YYY,XXX YYY"/>
            <textarea name="description" placeholder="Description du défi" rows="3" cols="60"></textarea></div><div>
            <label for="points">Points :</label><input type="number" id="points" name="points" />
            <select name="type" id="type">
                <option value="video">Vidéo</option>
                <option value="image">Image</option>
            </select>
            <input id="video-opt" type="text" name="src_video" placeholder="code de la vidéo (embed code)" title="En général, faire clic droit sur la vidéo pour obtenir le code d'intégration"/>
            <input id="image-opt" type="file" name="photo" hidden/>
            <button class="add-btn"><span class="fa fa-plus-square fa-2x"></span> </button></div>
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

        <h1>Gestion des défis de la liste</h1>

        <?php include "../../db/db_connect.php";
        $response = $db->query("SELECT * FROM challenges");
        while($row = $response->fetch()) {
            $id = $row['id'];
            print('
            <div class="challenges">
                <form action="update_challenge.php" method="post">
                <div>
                    <input type="hidden" name="id" value="' . $id . '" />
                    <input type="date" name="date" value="'.$row['date'].'" />
                    <input type="text" name="title" value="'.$row['titre'].'" /><br/>
                    <label for="challengers'.$id.'">Participants:</label><input type="text" name="challengers" id="challengers'.$id.'" value="'.$row['participants'].'"/>
                    <textarea name="description" rows="3" cols="50">'.$row['description'].'</textarea></div><div>
                    <label for="points'.$id.'">Points:</label> <input type="number" name="points" id="points'.$id.'" value="'.$row['points']. '"/>
                    <button class="edit-btn"><i class="fa fa-edit fa-2x"></i> </button>
                    <form action="remove_challenge.php" method="post">
                    <input type="hidden" name="id" value="' . $id.'" />
                    <button class="remove-btn"><i class="fa fa-trash fa-2x"></i> </button>
                </form></div>
                </form>

            </div>
            ');
        }
        ?>

    </div>
</section>
</body>