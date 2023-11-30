<?php require_once "./app/bootstrap.php"; ?>
<?php middleware::logout("auth_id", "login.php"); ?>
<?php utils::module("books"); ?>
<?php books::borrow(); ?>
<?php books::return(); ?>
<?php $borrow = books::is_borrow(); ?>
<?php $item = books::single(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $item["name"]; ?> - Book details</title>
    <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
</head>

<body class="bg-light h-100 d-flex flex-column">
    <?php utils::component("navbar"); ?>
    <main class="container h-100">
        <div class="row py-5 g-5">
            <div class="col-sm-6">
                <div class="card shadow rounded-4 border p-3">
                    <div class="card-body">
                        <img src="uploads/<?= $item["image"]; ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h3 class="fw-bold fs-1"><?= $item["name"]; ?></h3>
                <p class="fs-5"><?= $item["description"]; ?></p>
                <p class="mb-1">
                    <b>Edition</b>
                    <span><?= $item["edition"]; ?></span>
                </p>
                <p class="mb-1">
                    <b>Author</b>
                    <span><?= $item["author"]; ?></span>
                </p>
                <p class="mb-1">
                    <b>Description</b>
                    <span><?= $item["description"]; ?></span>
                </p>
                <p class="mb-1">
                    <b>Copies</b>
                    <span><?= $item["copies"]; ?></span>
                </p>

                <?php if ($borrow) : ?>
                    <?php if (date("Y-m-d") > date($borrow["returning_date"])) : ?>
                        <p class="my-3 text-center text-danger fw-bold">You have to pay 500RS fine because of late returning the book</p>
                    <?php elseif (date("Y-m-d") == date($borrow["returning_date"])) : ?>
                        <p class="my-3 text-center text-danger fw-bold">Today is the last day of book return</p>
                    <?php endif; ?>
                <?php endif; ?>


                <?php if ($item["copies"] != 0) : ?>
                    <?php if (!$borrow) : ?>
                        <form method="POST" class="py-3">
                            <input type="hidden" name="id" id="id" value="<?= $item["id"]; ?>">
                            <div class="form-group mb-3">
                                <label for="date" class="fw-bold">Returning date</label>
                                <input type="date" name="date" id="date" value="<?= http::input("date"); ?>" class="form-control focus-ring focus-ring-success" required>
                            </div>
                            <button type="submit" value="1" name="borrow" class="btn btn-success fw-bold">Borrow</button>
                        </form>
                    <?php else : ?>

                        <form method="POST" class="py-3">
                            <input type="hidden" name="id" id="id" value="<?= $item["id"]; ?>">
                            <div class="form-group mb-3">
                                <label for="date" class="fw-bold">Return date</label>
                                <input type="date" readonly name="date" id="date" value="<?= date("Y-m-d"); ?>" class="form-control focus-ring focus-ring-success" required>
                            </div>
                            <button type="submit" value="1" name="return" class="btn btn-success fw-bold">Return</button>
                        </form>
                    <?php endif; ?>
                <?php else : ?>
                    <h3 class="text-danger text-center fw-bold fs-5">0 Copies left: Not available right now</h3>
                <?php endif; ?>

            </div>
        </div>
        </div>
        <?php utils::component("footer"); ?>
</body>

</html>