<?php
session_start();
if(!isset($_SESSION['maintainer'])) {
    header("Location:login.php");
}
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Gestion des membres</title>
    <link rel="stylesheet" href="../styles/template.css" />
    <link rel="stylesheet" href="../styles/manage_members.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        const previewFile = (input,img_id,file_id) => {
            let file = $("#"+file_id).get(0).files[0];

            if(file) {
                let reader = new FileReader();
                reader.onload = () => {
                    $("#"+img_id).attr("src", reader.result);
                }

                reader.readAsDataURL(file);
            }
        };
    </script>
</head>

<body>
<?php include "header.php"; ?>

<section class="content">
    <div class="show_zone">

        <h1>Gestion des photos de la liste</h1>

        <?php include "../db/db_connect.php";
        $response = $db->query("SELECT * FROM photos");
        while($row = $response->fetch()) {
            print('
            <div class="photo">
                <img src="../images/'. $row["nom"] . '" alt="photo" width="150px"/>
                <form action="update_photo.php" method="post">
                    <input type="hidden" name="id" value="' . $row["id"] . '" />
                    <input name="description" type="text" value="'. $row["description"] . '" />
                    <button class="edit-btn"><i class="fa fa-edit fa-2x"></i> </button>
                </form>
                <form action="remove_photo.php" method="post">
                    <input type="hidden" name="id" value="'. $row['id'] .'" />
                    <button class="remove-btn"><i class="fa fa-trash fa-2x"></i> </button>
                </form>
            </div>
            ');
        }
        ?>
        <form enctype="multipart/form-data" action="add_photo.php" method="post" class="form-add-photo">
            <img id="preview" width="150px" src="../images/members/default.png" />
            <input id="photo" type="file" name="photo" accept="image/png, image/jpeg, image/jpg" onchange="previewFile(this,'preview','photo');" required/>
            <textarea name="description" placeholder="Description" required></textarea>
            <button class="add-btn"><i class="fa fa-user-plus fa-2x"></i></button>
        </form>


    </div>
</section>
</body>