<?php require_once "./app/bootstrap.php"; ?>
<?php utils::module("books"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book details</title>
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
</head>

<body class="primary-layout">
    <?php utils::component("navbar"); ?>
    <?php $book = books::single(); ?>
    <main class="content">
        <div class="detail-card">
            <div class="card-head">
                <h3 class="heading">Book details</h3>
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <td>ID</td>
                        <td><?= $book["id"]; ?></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><?= $book["name"]; ?></td>
                    </tr>
                    <tr>
                        <td>edition</td>
                        <td><?= $book["edition"]; ?></td>
                    </tr>
                    <tr>
                        <td>author</td>
                        <td><?= $book["author"]; ?></td>
                    </tr>
                    <tr>
                        <td>description</td>
                        <td><?= $book["description"]; ?></td>
                    </tr>
                    <tr>
                        <td>copies</td>
                        <td><?= $book["copies"]; ?></td>
                    </tr>
                    <tr>
                        <td>Active</td>
                        <td><?= utils::is_active("badge", $book["is_active"]); ?></td>
                    </tr>
                    <tr>
                        <td>Created by</td>
                        <td><?= $book["created_by"]; ?></td>
                    </tr>
                    <tr>
                        <td>Created at</td>
                        <td><?= $book["created_at"]; ?></td>
                    </tr>
                    <tr>
                        <td>Updated at</td>
                        <td><?= $book["updated_at"]; ?></td>
                    </tr>
                </table>
            </div>
            <div class="card-foot">
                <a href="books.php" class="btn btn-primary">Go back</a>
            </div>
        </div>
    </main>
    <?php utils::component("footer"); ?>

</body>

</html>