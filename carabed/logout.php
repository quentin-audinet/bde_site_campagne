<?php
require "conf.php";
session_destroy();
setcookie('user_id', '', time() -3600,  null, null, true, true);
header("Location:login.php");
?>