<?php require_once "./app/bootstrap.php"; ?>

<?php utils::module("books"); ?>

<?php books::update(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book update</title>
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
</head>

<body class="primary-layout">
    <?php utils::component("navbar"); ?>
    <?php $book = books::single(); ?>
    <main class="content">
        <form method="post" class="form-card">
            <div class="card-head">
                <h3 class="heading">Update book</h3>
                <h4 class="sub-heading">Update your added book details</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="hidden" name="id" id="id" value="<?= $book['id'] ?>" required>
                    <input type="text" name="name" id="id" class="form-input" value="<?= $book['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" name="description" id="description" class="form-input" value="<?= $book['description'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="edition" class="form-label">Edition</label>
                    <input type="text" name="edition" id="edition" class="form-input" value="<?= $book['edition'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" name="author" id="author" class="form-input" value="<?= $book['author'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="copies" class="form-label">Copies</label>
                    <input type="text" name="copies" id="copies" class="form-input" value="<?= $book['copies'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="is_active" class="form-label">Is active</label>
                    <select name="is_active" id="is_active" class="form-input" required>
                        <option value="">Select</option>
                        <?php utils::is_active("select", $book['is_active']); ?>
                    </select>
                </div>
            </div>
            <div class="card-foot">
                <button class="btn btn-primary btn-block" type="submit">Create</button>
            </div>
        </form>
    </main>
    <?php utils::component("footer"); ?>
</body>

</html>