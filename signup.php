<?php require_once "./app/bootstrap.php"; ?>
<?php utils::module("account"); ?>
<?php account::signup(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
    <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
</head>

<body class="bg-light h-100 d-flex flex-column">
    <?php utils::component("navbar"); ?>
    <main class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-sm-4 m-auto">
                <form method="post" class="card shadow rounded-4 border p-3">
                    <div class="card-header text-center bg-transparent border-0 pt-4">
                        <h3 class="fs-2 fw-bold">Signup</h3>
                        <p class="fs-6 text-muted m-0">Create your account</p>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="form-group mb-3 col-sm-6">
                                <label for="first_name" class="fw-bold mb-1">First name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control " value="<?= http::input("first_name"); ?>" required>
                            </div>
                            <div class="form-group mb-3 col-sm-6">
                                <label for="last_name" class="fw-bold mb-1">Last name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control " value="<?= http::input("last_name"); ?>" required>
                            </div>
                            <div class="form-group mb-3 col-sm-6" class="fw-bold mb-1">
                                <label for="email" class="fw-bold mb-1">Email</label>
                                <input type="text" name="email" id="email" class="form-control " value="<?= http::input("email"); ?>" required>
                            </div>
                            <div class="form-group mb-3 col-sm-6">
                                <label for="phone" class="fw-bold mb-1">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control " value="<?= http::input("phone"); ?>" required>
                            </div>
                            <div class="form-group mb-3 col-sm-12">
                                <label for="password" class="fw-bold mb-1">Password</label>
                                <input type="password" name="password" id="password" class="form-control " value="<?= http::input("password"); ?>" required>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer bg-transparent border-0 pb-4">
                        <button class="btn btn-success w-100 fw-bold" type="submit">Signup</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php utils::component("footer"); ?>
</body>

</html>