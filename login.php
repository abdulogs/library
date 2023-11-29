<?php require_once "./app/bootstrap.php"; ?>
<?php middleware::login("auth_id", "home.php"); ?>
<?php utils::module("account"); ?>
<?php account::login(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
</head>

<body class="bg-light h-100 d-flex flex-column">
    <?php utils::component("navbar"); ?>
    <main class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-sm-3 m-auto">
                <form method="post" class="card shadow rounded-4 border p-3">
                    <div class="card-header text-center bg-transparent border-0 pt-4">
                        <h3 class="fs-2 fw-bold">Login</h3>
                        <p class="fs-6 text-muted m-0">Login back to your account</p>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="email" class="fw-bold mb-1">Email</label>
                            <input type="email" name="email" id="email" class="form-control focus-ring focus-ring-success" value="<?= http::input("email"); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="fw-bold mb-1">Password</label>
                            <input type="password" name="password" id="password" class="form-control focus-ring focus-ring-success" value="<?= http::input("password"); ?>" required>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-4">
                        <button class="btn btn-success w-100 fw-bold" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php utils::component("footer"); ?>
</body>

</html>