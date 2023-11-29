<?php require_once "./app/bootstrap.php"; ?>
<?php middleware::logout("auth_id", "login.php"); ?>
<?php utils::module("books"); ?>
<?php books::delete(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
</head>

<body class="bg-light h-100 d-flex flex-column">
    <?php utils::component("navbar"); ?>
    <main class="container h-100">
    <nav class="m-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php" class=" text-dark text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active">Books</li>
            </ol>
        </nav>
        <div class="row justify-content-center h-100">
            <div class="card shadow-sm rounded-4 border">
                <div class="card-header bg-transparent border-0 pt-4 d-flex align-items-center justify-content-between">
                    <h3 class="fs-2 fw-bold">Books</h3>
                    <a href="book-create.php" class="btn btn-success fw-bold">Create</a>
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Edition</th>
                                <th>Author</th>
                                <th>Copies</th>
                                <th>Active</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Controls</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $listing = books::listing(); ?>
                            <?php if ($listing) : ?>
                                <?php foreach ($listing as $item) : ?>
                                    <tr>
                                        <td><?= $item["id"]; ?></td>
                                        <td><?= $item["name"]; ?></td>
                                        <td><?= $item["edition"]; ?></td>
                                        <td><?= $item["author"]; ?></td>
                                        <td><?= $item["copies"]; ?></td>
                                        <td><?= utils::is_active("badge", $item["is_active"]); ?></td>
                                        <td><?= $item["created_at"]; ?></td>
                                        <td><?= $item["updated_at"]; ?></td>
                                        <td>
                                            <a href="book-details.php?id=<?= $item["id"]; ?>" class="btn btn-sm btn-light">Details</a>
                                            <a href="book-update.php?id=<?= $item["id"]; ?>" class="btn btn-sm btn-success">Edit</a>
                                            <a href="books.php?id=<?= $item["id"]; ?>" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="9" class="text-center text-danger fw-bold p-2">No records exists</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </main>
    <?php utils::component("footer"); ?>
</body>

</html>