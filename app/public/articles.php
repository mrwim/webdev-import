<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Articles</title>
</head>
<body>

<script src="articles.js"></script>

<?php

$articles = json_decode(file_get_contents('http://nginx/articles'), true);
foreach ($articles as $article) {
    echo $article['name'];
}

?>

</body>
</html>