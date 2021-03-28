<?php
include "../redirect.php";
if(empty($_SESSION)) {
    require "conf.php";
}
function sendMessage($message)
{
    if(!empty($message)) {
        require "../db/db_connect.php";
        $req = $db->prepare("INSERT INTO chat (`user_id`, `message`) VALUES (:id, :message)");
        $req->execute(array(
        'id' => $_SESSION['id'],
        'message' => $message
        ));
    }
}

if(isset($_POST['message'])) {
    sendMessage($_POST['message']);
}

?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8" />
    <title>Chat</title>
    <link rel="stylesheet" href="styles/chat.css" />
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script>
        window.onload = function () {
            const chat = document.getElementById("container");
            chat.scrollTop = chat.scrollHeight;
        }
    </script>
</head>

<body>

<?php include "header.html"; ?>
<div id="container">
    <?php
    $messages = $db->query("SELECT username, message, `date` FROM chat JOIN users ON user_id=users.id ORDER BY `date` ASC");
    while($row = $messages->fetch()) {
        $class = $row['username']==$_SESSION['username']?"user":"other";
        $date = $row['date'];
        $username = $row['username'];
        $message = $class=="other"?">> ".$row['message']:$row['message']." <<";
        print("
<div class='$class message'>
<span class='username'>$username</span><br/>
<span class='content'>$message</span><br/>
<span class='date'>$date</span>
</div>");
    }
    ?>
</div>

<form action="" method="post">
    <input id="message" name="message" type="text" /><button style="background: none;border: none"><i class="fa fa-paper-plane fa-2x" aria-hidden="true"></i></button>
</form>

</body>
</html>