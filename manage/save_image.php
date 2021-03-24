<?php
    if(!isset($_SESSION['maintainer'])) {
    header("Location:login.php");
}

$upload_file = $upload_dir . basename($_FILES['photo']['name']);

move_uploaded_file($_FILES['photo']['tmp_name'], $upload_file);
?>