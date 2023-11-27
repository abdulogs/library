<?php require_once "./app/bootstrap.php"; ?>
<?php utils::module("books"); ?>
<?php $book = books::single(); ?>
<?php books::update(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book update</title>
    <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
</head>

<body class="bg-light h-100 d-flex flex-column">
    <?php utils::component("navbar"); ?>
    <main class="container h-100">
    <nav class="m-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php" class=" text-dark text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="books.php" class="text-dark text-decoration-none">Books</a></li>
                <li class="breadcrumb-item active">Update</li>
            </ol>
        </nav>
        <div class="row justify-content-center h-100">
            <div class="col-sm-4 m-auto">
                <form method="post" class="card shadow rounded-4 border p-3">
                    <div class="card-header bg-transparent border-0 pt-4">
                        <h3 class="fs-2 fw-bold mb-0">Update</h3>
                        <p class="fs-6 text-muted m-0">Update book details</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group mb-3 col-sm-12">
                                <label for="name" class="fw-bold mb-1">Name</label>
                                <input type="hidden" name="id" id="id" value="<?= $book['id'] ?>" required>
                                <input type="text" name="name" id="id" class="form-control focus-ring focus-ring-success" value="<?= $book['name'] ?>">
                            </div>
                            <div class="form-group mb-3 col-sm-12">
                                <label for="description" class="fw-bold mb-1">Description</label>
                                <textarea name="description" id="description" class="form-control focus-ring focus-ring-success" required><?= $book['description'] ?></textarea>
                            </div>
                            <div class="form-group mb-3 col-sm-6">
                                <label for="edition" class="fw-bold mb-1">Edition</label>
                                <input type="text" name="edition" id="edition" class="form-control focus-ring focus-ring-success" value="<?= $book['edition'] ?>" required>
                            </div>
                            <div class="form-group mb-3 col-sm-6">
                                <label for="author" class="fw-bold mb-1">Author</label>
                                <input type="text" name="author" id="author" class="form-control focus-ring focus-ring-success" value="<?= $book['author'] ?>" required>
                            </div>
                            <div class="form-group mb-3 col-sm-6">
                                <label for="copies" class="fw-bold mb-1">Copies</label>
                                <input type="text" name="copies" id="copies" class="form-control focus-ring focus-ring-success" value="<?= $book['copies'] ?>" required>
                            </div>
                            <div class="form-group mb-3 col-sm-6">
                                <label for="is_active" class="fw-bold mb-1">Is active</label>
                                <select name="is_active" id="is_active" class="form-control form-select focus-ring focus-ring-success" required>
                                    <option value="">Select</option>
                                    <?php utils::is_active("select", $book['is_active']); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent text-center border-0 pb-4">
                        <button class="btn btn-success w-100 fw-bold" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php utils::component("footer"); ?>
</body>

</html>