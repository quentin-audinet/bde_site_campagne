<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8" />
    <title class="t_news">News</title>
    <link rel="stylesheet" href="styles/news.css" />
    <link rel="stylesheet" href="styles/template.css" />
</head>

<body>
<?php include "templates/header.php";?>

<h1 class="page-title"><span class="t_news_titre"></span></h1>

<?php
include "db/db_connect.php";

$data = $db->query("SELECT * FROM news ORDER BY date DESC, id DESC");
while($row = $data->fetch()) {
    $author = $row['auteur'];
    $content = $row['contenu'];
    $date = $row['date'];
    print("
    <h3 class='header'>Le $date de $author</h3>
    <div class='news'>$content</div>
    ");
}

?>

<?php include "templates/footer.html";?>

</body>
</html>