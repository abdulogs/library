<?php require_once "./app/bootstrap.php"; ?>
<?php utils::module("account"); ?>
<?php account::login(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
</head>

<body class="bg-light h-100 d-flex flex-column">
    <?php utils::component("navbar"); ?>
    <main class="container h-100">
        <nav class="m-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php" class=" text-dark text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active">Users</li>
            </ol>
        </nav>
        <div class="row h-100">
            <div class="col-sm-3">
                <div class="card shadow rounded-4 border p-3">
                    <div class="card-header text-center bg-transparent border-0 pt-4">
                        <a href="" class="card-image">
                            <img src="./" alt="" class="image">
                        </a>
                    </div>
                    <div class="card-body">
                        <h3 class="heading"></h3>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi sit numquam porro pariatur dolor tempora.</p>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-4">
                        <a href="borrow-book.php?id=" class="btn btn-success fw-bold">Book details</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php utils::component("footer"); ?>
</body>

</html>