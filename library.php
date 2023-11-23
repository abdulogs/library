<?php require_once "./app/bootstrap.php"; ?>
<?php utils::module("books"); ?>
<?php books::library(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
</head>

<body class="primary-layout">
    <?php utils::component("navbar"); ?>

    <div class="books">
        <?php $listing = books::listing(); ?>
        <?php if ($listing) : ?>
            <?php foreach ($listing as $item) : ?>

                <div class="col">
                    <div class="book-card">
                        <div class="card-head">
                            <a href="" class="card-image">
                                <img src="./" alt="" class="image">
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="heading"><?= $item["name"]; ?></h3>
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi sit numquam porro pariatur dolor tempora.</p>
                        </div>
                        <div class="card-foot">
                            <a href="borrow-book.php?id=<?= $item["id"]; ?>" class="btn btn-primary">Book details</a>
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