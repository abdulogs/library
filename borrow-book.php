<?php require_once "./app/bootstrap.php"; ?>
<?php utils::module("books"); ?>
<?php books::borrow(); ?>
<?= session::get("auth_id"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
    <style>
        .book-details {
            display: flex;
            justify-content: space-between;
            padding: 40px;
        }

        .book-details .col {
            width: 50%;
        }
    </style>
</head>

<body class="primary-layout">
    <?php utils::component("navbar"); ?>
    <?php $item = books::single(); ?>
    <div class="content">
        <div class="book-details">
            <div class="col">
                <img src="" alt="" class="book-image">
            </div>
            <div class="col">
                <h3 class="heading"><?= $item["name"]; ?></h3>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi sit numquam porro pariatur dolor tempora.</p>
                <br>
                <form method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $item["id"]; ?>">
                    <div class="form-group">
                        <label for="date" class="form-label">Return date</label>
                        <input type="date" name="date" id="date" value="<?= http::input("date"); ?>" class="form-input">
                    </div>
                    <button type="submit" value="1" name="borrow" class="btn btn-primary">Borrow</button>
                </form>
            </div>
        </div>
    </div>
    <?php utils::component("footer"); ?>
</body>

</html>