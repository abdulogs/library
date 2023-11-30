<?php require_once "./app/bootstrap.php"; ?>
<?php middleware::logout("auth_id", "login.php"); ?>
<?php middleware::is_student("library.php"); ?>
<?php utils::module("books"); ?>
<?php $book = books::single(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book details</title>
    <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
</head>

<body class="bg-light h-100 d-flex flex-column">
    <?php utils::component("navbar"); ?>
    <main class="container h-100 ">
        <nav class="m-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php" class=" text-dark text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="books.php" class="text-dark text-decoration-none">Books</a></li>
                <li class="breadcrumb-item active">Details</li>
            </ol>
        </nav>
        <div class="row justify-content-center h-100  overflow-auto">
            <div class="card shadow-sm rounded-4 border p-3">
                <div class="card-header  bg-transparent border-0 pt-4">
                    <h3 class="fs-2 fw-bold">Book details</h3>
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <tr>
                            <td class="fw-bold">ID</td>
                            <td><?= $book["id"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Name</td>
                            <td><?= $book["name"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Edition</td>
                            <td><?= $book["edition"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Author</td>
                            <td><?= $book["author"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Description</td>
                            <td><?= $book["description"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Copies</td>
                            <td><?= $book["copies"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Active</td>
                            <td><?= utils::is_active("badge", $book["is_active"]); ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Created by</td>
                            <td><?= $book["created_by"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Created at</td>
                            <td><?= $book["created_at"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Updated at</td>
                            <td><?= $book["updated_at"]; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer bg-transparent text-center border-0 pb-4">
                    <a href="books.php" class="btn btn-success fw-bold">Go back</a>
                </div>
            </div>
        </div>
    </main>
    <?php utils::component("footer"); ?>
</body>

</html>