<?php
session_start();
if(!isset($_SESSION['maintainer'])) {
    header("Location:../login.php");
}
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Gestion des membres</title>
    <link rel="stylesheet" href="../../styles/template.css" />
    <link rel="stylesheet" href="../../styles/manage_members.css">
    <link rel="stylesheet" href="../../styles/fontawesome/css/fontawesome.css" />
    <link rel="stylesheet" href="../../styles/fontawesome/css/brands.css" />
    <link rel="stylesheet" href="../../styles/fontawesome/css/solid.css" />
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
<?php include "../header.php"; ?>

<section class="content">
    <div class="show_zone">

        <h1>Ajouter un membre</h1>

        <form enctype="multipart/form-data" action="add_member.php" method="post" class="form-add-member">
            <img id="preview" width="50px" height="50px" src="../../images/members/default.png" />
            <input id="profil_pic" name="photo" type="file" accept="image/png, image/jpeg, image/jpg" onchange="previewFile(this,'preview','profil_pic');"/>
            <input type="text" name="name" placeholder="Nom" required/>
            <input type="text" name="nickname" placeholder="Surnom"/>
            <textarea name="desc" placeholder="Description"></textarea>
            <select name="statut">
                <option value="1">Bureau</option>
                <option value="2">Listeux</option>
                <option value="0" selected>Membre</option>
            </select><div>
            <input type="text" name="fb_link" placeholder="lien vers la page fb" />
            <input type="text" name="insta_link" placeholder="lien vers la page insta" />
            <input type="text" name="twitter_link" placeholder="lien vers la page twitter" />
            <input type="text" name="tiktok_link" placeholder="lien vers la page tiktok" />
            <button class="add-btn"><i class="fa fa-user-plus fa-2x"></i></button>
            </div>
        </form>

        <h1>Gestion des membres de la liste</h1>


        <?php
        include "../../db/db_connect.php";
        $data = $db->query("SELECT * FROM members ORDER BY id DESC");
        while($row = $data->fetch()) {
            $id = $row['id'];
            $socials=$row['socials'];

            $matches = array();
            $links = array();
            $classes = array();
            $socials_array = array("facebook" => "", "instagram" => "", "twitter" => "", "tiktok" => "");

            if(preg_match_all("@(href=')([^']+)+@i",$socials,$matches)) {
                $links = $matches[2];
            }
            if(preg_match_all("@(class='fa[bs]? fa-)([^']+)+@i",$socials,$matches)) {
                $classes = $matches[2];
            }

            for($i=0;$i<count($classes);$i++) {
                $socials_array[$classes[$i]] = $links[$i];
            }

            print('
            <hr width="90%"/>   
            <div class="member">
                <form enctype="multipart/form-data" action="update_member.php" method="post">
                    <input name="id" type="hidden" value="' . $id . '" />
                    <img id="preview' . $id .'" width="50px" height="50px" src="../../images/members/' . $row['photo'] . '"/>
                    <input name="photo" id="profil_pic' . $id . '" type="file" accept="image/png, image/jpeg, image/jpg"
                        onchange="previewFile(this, \'preview' . $id . '\',\'profil_pic' . $id . '\');"/>
                    <input name="name" type="text" value="' . $row['nom'] . '"/>
                    <input name="nickname" type="text" value="' . $row['surnom'] . '"/>
                    <textarea name="desc">' . $row['description'] . '</textarea>
                    <select name="statut">
                        <option value="1" ' . ($row['statut']==1?"selected":"") . '>Bureau</option>
                        <option value="2" ' . ($row['statut']==2?"selected":"") . '>Listeux</option>
                        <option value="0" ' . ($row['statut']==0?"selected":"") . '>Membre</option>
                    </select>
                    <div>
                    <label><i class="fab fa-facebook"></i> </label><input type="text" name="fb_link" value="'. $socials_array['facebook'] .'" />
                    <label><i class="fab fa-instagram"></i> </label><input type="text" name="insta_link" value="'. $socials_array['instagram'] .'" />
                    <label><i class="fab fa-twitter"></i> </label><input type="text" name="twitter_link" value="'. $socials_array['twitter'] .'" />
                    <label><i class="fab fa-tiktok"></i> </label><input type="text" name="tiktok_link" value="'. $socials_array['tiktok'] .'" />
                    <button class="edit-btn"><i class="fa fa-edit fa-2x"></i></button>
                    </div>
                </form>
                <form action="remove_member.php" method="post">
                    <input type="hidden" name="id" value="' . $id .'" />
                    <button class="remove-btn"><i class="fa fa-trash fa-2x"></i> </button>
                </form>
            </div>
            ');
        }
        ?>


    </div>
</section>
</body>
