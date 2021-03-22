<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8" />
    <title class="t_carabed-defis">Nos défis</title>
    <link rel="stylesheet" href="styles/template.css" />
</head>

<body>
<?php include "templates/header.php";?>

<h1>Tous nos défis</h1>

<?php
include "db/db_connect.php";
$response = $db->query("SELECT * FROM challenges ORDER BY `date` DESC, id DESC");

while($row = $response->fetch()) {
    $date = $row['date'];
    $title = $row['titre'];
    $points = $row['points'];
    $description = $row['description'];
    $src = $row["source"];
    $challengers = explode(",", $row['participants']);
    $challengers_list = "<ul>";
    for($i=0; $i < count($challengers); $i++) {
        $challengers_list.= "<li>".$challengers[$i]."</li>";
    }
    $challengers_list.="</ul>";
    print('
    <div class="challenge">
    <h3>'.$date.' - '.$title.' : '.$points.' pts</h3>
    '.$src.$challengers_list.'
    <p>'.$description.'</p>
    </div>
    <hr width="90%">
    ');
}


?>

<?php include "templates/footer.html";?>

</body>
</html>