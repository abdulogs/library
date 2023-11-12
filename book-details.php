<?php require_once "./app/bootstrap.php"; ?>
<?php utils::module("books"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book details</title>
</head>

<body>
    <?php $book = books::single(); ?>

    <h1>Book details</h1>
    <a href="books.php">Go back</a>
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

</body>

</html>