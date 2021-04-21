<?php
require "../db/db_connect.php";
if(!isset($_SESSION))
    session_start();
if(isset($_COOKIE['user_id']) && !isset($_SESSION['id'])) {
    $auth = $_COOKIE['user_id'];
    $auth = explode('$', $auth);
    $response = $db->query("SELECT id,username,password FROM users WHERE id='".$auth[0]."'");
    $result = $response->fetch();
    if($result) {
        $key = sha1($result['username'] . $result['password'] . $_SERVER['REMOTE_ADDR']);
        if ($key == $auth[1]) {
            $_SESSION['id'] = $result['id'];
            $_SESSION['username'] = $result['username'];
            setcookie('user_id', $result['id'] . "$" . sha1($result['username'].$result['password'].$_SERVER['REMOTE_ADDR']), time() + 3600 * 24 * 3, '/', null, true, true);
        } else {
            setcookie('user_id', '', time() -3600,  '/', null, true, true);
        }
    }
}?>