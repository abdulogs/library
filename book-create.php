<?php require_once "./app/bootstrap.php"; ?>
<?php utils::module("books"); ?>
<?php books::create(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book create</title>
</head>

<body>

    <h1>Book create</h1>
    <a href="books.php">Go back</a>
    <form method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" required>
        </div>
        <div class="form-group">
            <label for="edition">Edition</label>
            <input type="text" name="edition" id="edition" required>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" required>
        </div>

        <div class="form-group">
            <label for="copies">Copies</label>
            <input type="text" name="copies" id="copies" required>
        </div>
        <div class="form-group">
            <label for="is_active">Is active</label>
            <select name="is_active" id="is_active" required>
                <option value="">Select</option>
                <?php utils::is_active("select"); ?>
            </select>
        </div>
        <button type="submit">Create</button>
    </form>
</body>

</html>