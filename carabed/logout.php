<?php
require "conf.php";
if(!isset($_SESSION))
    session_destroy();
setcookie('user_id', '', time() - 3600,  '/', null, true, true);
header("Location:login.php");
?>