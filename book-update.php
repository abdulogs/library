<?php require_once "./app/bootstrap.php"; ?>

<?php utils::module("books"); ?>

<?php books::update(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class update</title>
</head>

<body>

    <?php $book = books::single(); ?>
    <h1>class update</h1>
    <a href="books.php">Go back</a>
    <form method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="hidden" name="id" id="id" value="<?= $book['id'] ?>" required>
            <input type="text" name="name" id="id" value="<?= $book['name'] ?>">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" value="<?= $book['description'] ?>" required>
        </div>
        <div class="form-group">
            <label for="edition">Edition</label>
            <input type="text" name="edition" id="edition" value="<?= $book['edition'] ?>" required>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" value="<?= $book['author'] ?>" required>
        </div>
      
        <div class="form-group">
            <label for="copies">Copies</label>
            <input type="text" name="copies" id="copies" value="<?= $book['copies'] ?>" required>
        </div>
        <div>
            <label for="">Is active</label>
            <select name="is_active" id="is_active" required>
                <option value="">Select</option>
                <?php utils::is_active("select", $book['is_active']); ?>
            </select>
        </div>
        <button type="submit">Update</button>
    </form>

</body>

</html>