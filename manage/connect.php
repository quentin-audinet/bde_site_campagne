<?php
include "../db/db_connect.php";
$req = "SELECT password FROM maintainers WHERE mail=" . $db->quote($_POST['mail']);
$resp = $db->query($req);
if(($pass = $resp->fetch()) && password_verify($_POST['password'], $pass[0])) {
    print('success');
    session_start();
    $_SESSION['maintainer'] = $_POST['mail'];
} else {
    print("failed");
}
?>