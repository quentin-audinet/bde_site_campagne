<?php
session_start();
unset($_SESSION['maintainer']);
header('Location:../index.php');
?>