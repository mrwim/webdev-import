<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
</head>

<body>

<!-- Example of copy pasting and modifying a navbar from the bootstrap examples -->
<!-- Copy pasted from https://getbootstrap.com/docs/5.0/examples/navbars/ -->

<nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
    <div class="container">
        <a class="navbar-brand" href="#">Best store ever</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
                aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown"
                       aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown04">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <form>
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
</nav>

<!-- Example of how to use the bootstral classes to create a nice header -->

<section class="py-3 text-center container-fluid bg-light">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">The best products</h1>
            <p class="lead text-muted">Here you will find fresh articles, specially curated for you by our experts.
                👌</p>
        </div>
    </div>
</section>

<!-- Example of responsive product cards -->

<section>
    <div class="container">
        <h2 class="mt-3 mt-lg-5">Miscellaneous</h2>
        <div class="row">
            <?php
            require_once("fakeproducts.php");
            foreach ($products as $product) {
                ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 p-2">
                    <div class="card product-card h-100 ">
                        <div class="card-body">
                            <img src="<?= $product->image ?>" alt="<?= $product->title ?>" title="?=$product->title?">
                            <p><?= $product->title ?></p>
                            <p><small><?= $product->category ?></small></p>
                        </div>
                        <div class="card-footer">
                            <span class="price float-start"><?= $product->price ?></span>
                            <button class="btn btn-secondary float-end"> +</button>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
</section>

<!-- A footer -->

<!-- some social icons to show off font awesome -->

<footer>
    <div class="bg-light text-center">
        <div class="container pt-3 pb-2 mt-5">
            <p class="mb-0">Follow us on:</p>
            <i class="fa-brands social-icon fa-twitter"></i><i class="fa-brands social-icon fa-facebook"></i><i
                    class="fa-brands social-icon fa-instagram"></i><i class="fa-brands social-icon fa-linkedin"></i>
        </div>
    </div>

    <div class="bg-dark text-light">
        <div class="container pt-3 pb-2">
            <p class="float-end"><a class="text-light" href="#">Back to top</a></p>
            <p>© 2017–2021 Best store ever · <a href="#" class="text-light">Privacy</a> · <a class="text-light"
                                                                                             href="#">Terms</a></p>
        </div>
    </div>
</footer>

<!-- Javascript needed to make the dropdown and hamburger menu work -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>