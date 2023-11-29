<?php require_once "./app/bootstrap.php"; ?>
<?php middleware::logout("auth_id", "login.php"); ?>
<?php utils::module("reports"); ?>


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
        <nav class="m-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php" class=" text-dark text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active">Users</li>
            </ol>
        </nav>
        <div class="row py-5">
            <div class="col-sm-3">
                <div class="card shadow rounded-4 border p-3 mb-4">
                    <div class="card-body">
                        <p class="fs-2 m-0 text-success"><?= reports::books(); ?></p>
                        <h3 class="fs-4 fw-bold">Books</h3>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-4">
                        <a href="books.php" class="btn btn-success fw-bold">Go to details</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card shadow rounded-4 border p-3 mb-4">
                    <div class="card-body">
                        <p class="fs-2 m-0 text-success"><?= reports::admins(); ?></p>
                        <h3 class="fs-4 fw-bold">Admins</h3>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-4">
                        <a href="users.php" class="btn btn-success fw-bold">Go to details</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card shadow rounded-4 border p-3 mb-4">
                    <div class="card-body">
                        <p class="fs-2 m-0 text-success"><?= reports::faculty(); ?></p>
                        <h3 class="fs-4 fw-bold">Faculty</h3>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-4">
                        <a href="users.php" class="btn btn-success fw-bold">Go to details</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card shadow rounded-4 border p-3 mb-4">
                    <div class="card-body">
                        <p class="fs-2 m-0 text-success"><?= reports::students(); ?></p>
                        <h3 class="fs-4 fw-bold">Students</h3>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-4">
                        <a href="users.php" class="btn btn-success fw-bold">Go to details</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card shadow rounded-4 border p-3 mb-4">
                    <div class="card-body">
                        <p class="fs-2 m-0 text-success"><?= reports::borrow_books(); ?></p>
                        <h3 class="fs-4 fw-bold">Borrow books</h3>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-4">
                        <a href="borrow-books.php" class="btn btn-success fw-bold">Go to details</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php utils::component("footer"); ?>
</body>

</html>