<?php
$host="dokku-mysql-listebde-1339238402984-db";
$user="mysql";
$pass="8f84bd224d08d3b5";
$dbname="listebde_1339238402984_db";
try {
    $db = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>