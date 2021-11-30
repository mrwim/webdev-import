<?php
require_once('model/Article.php')

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jacks's Guitarshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white pb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="image/guitar.png" alt="" width="60" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="about">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container bg-light">

    <h1 class="h1 text-center">Jack's Guitarshop</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Author</th>
            <th scope="col">Datetime</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($articles as $article) {
            ?>
            <tr>
                <th scope="row"><?php echo $article->id; ?></th>
                <td><?php echo $article->title; ?></td>
                <td><?php echo $article->content; ?></td>
                <td><?php echo $article->author; ?></td>
                <td><?php echo $article->datetime; ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
