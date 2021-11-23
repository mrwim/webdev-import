<!Doctype html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="h2">Login <span class="text-primary">page</span></div>
</div>

<div class="container-md border">
    <div class="mb-3">
        <label for="e-mail" class="form-label">E-mail</label>
        <input type="text" class="form-control" id="e-mail" name="e-mail">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="check-me-out">
        <label class="form-check-label" for="check-me-out">Check me out</label>
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
    <button type="button" class="btn btn-outline-warning">Clear</button>
</div>

</body>