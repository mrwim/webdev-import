<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="m-5">

<script src="articles.js"></script>

<?php
$articles = json_decode(file_get_contents('http://nginx/articles'), true);

?>
<h1 class="h1">Articles</h1>

<table class="table table-hover">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">price</th>
        <th scope="col">action</th>
    </tr>
<?php
foreach ($articles as $article) {
    ?>
    <tr>
        <td><?php echo $article['id'] ?></td>
        <td><?php echo $article['name'] ?></td>
        <td><?php echo $article['price'] ?></td>
        <td>
            <button class="btn btn-outline-danger" onclick="deleteArticle(<?php echo $article['id'] ?>)">Delete</button>
        </td>
    </tr>
    <?php
}
?>
</table>

<div class="row g-3">
    <div class="col-sm-7">
        <input type="text" id="form-name" class="form-control" placeholder="Name" aria-label="Name">
    </div>
    <div class="col-sm">
        <input type="text" id="form-price" class="form-control" placeholder="Price" aria-label="Price">
    </div>
    <div class="col-sm">
        <button class="btn btn-primary" onclick="createArticle()">Add</button>
    </div>
</div>
</body>

</html>