<?php
function getLastMessages() {
    require "../db/db_connect.php";
    return $db->query("SELECT username, message, date FROM chat JOIN users ON user_id=users.id ORDER BY `date` DESC LIMIT 10");
}

$messages = getLastMessages();
while($row = $messages->fetch()) {
    print("<span class='message'><b>".$row['username'] . "</b> >> " . $row['message'] . "</span><br/>");
}
?>