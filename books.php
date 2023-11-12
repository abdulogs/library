<?php require_once "./app/bootstrap.php"; ?>

<?php utils::module("books"); ?>
<?php books::delete(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>

<body>
    <h1>Books</h1>

    <a href="book-create.php">Create</a>
    <table>
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
                            <a href="book-details.php?id=<?= $item["id"]; ?>">Details</a>
                            <a href="book-update.php?id=<?= $item["id"]; ?>">Edit</a>
                            <a href="books.php?id=<?= $item["id"]; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="9">No records exists</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>

</html>