<?php require_once "./app/bootstrap.php"; ?>
<?php middleware::login("auth_id", "home.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
</head>

<body class="bg-light h-100 d-flex flex-column">
    <?php utils::component("navbar"); ?>
    <main class="container h-100">
        <div class="row g-5 align-items-center">
            <div class="col-sm-6">
                <h1 class="fs-1 fw-bold text-dark">Welcome to e-library</h1>
                <p class="text-muted fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo assumenda earum nobis vitae libero ratione beatae repellat labore minima ut! Inventore cum debitis maxime hic nam numquam harum alias officiis.</p>
                <a href="signup.php" class="btn btn-lg btn-success">Get started</a>
            </div>
            <div class="col-sm-6 text-right">
                <img src="./assets/images/bg.webp" class="img-fluid" alt="">
            </div>
        </div>
    </main>
    <?php utils::component("footer"); ?>
</body>

</html>