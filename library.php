<?php require_once "./app/bootstrap.php"; ?>
<?php utils::module("books"); ?>
<?php books::library(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
</head>

<body class="bg-light h-100 d-flex flex-column">
    <?php utils::component("navbar"); ?>
    <main class="container h-100">
        <nav class="m-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php" class=" text-dark text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active">Library</li>
            </ol>
        </nav>
        <div class="row h-100">
            <?php $listing = books::listing(); ?>
            <?php if ($listing) : ?>
                <?php foreach ($listing as $item) : ?>
                    <div class="col-sm-3">
                        <div class="card shadow rounded-4 border p-2">
                            <div class="card-header text-center bg-transparent border-0 pt-4">
                                <a href="borrow-book.php?id=<?= $item["id"]; ?>" class="d-block" style="height:250px;">
                                    <img src="uploads/<?= $item["image"]; ?>" style="height:250px;"class="img-fluid">
                                </a>
                            </div>
                            <div class="card-body">
                                <h3 class="heading"><?= $item["name"]; ?></h3>
                                <p class="description"><b>Author:</b> <?= $item["author"]; ?></p>
                            </div>
                            <div class="card-footer bg-transparent border-0 pb-4">
                                <a href="borrow-book.php?id=<?= $item["id"]; ?>" class="btn btn-success fw-bold">Book details</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>No records exists</p>
            <?php endif; ?>
        </div>
        <?php utils::component("footer"); ?>
</body>

</html>