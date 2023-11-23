<?php require_once "./app/bootstrap.php"; ?>
<?php utils::module("account"); ?>
<?php account::login(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
</head>

<body class="primary-layout">
    <?php utils::component("navbar"); ?>
    <main class="content">
        <form method="post" class="form-card">
            <div class="card-head">
                <h3 class="heading">Login</h3>
                <h4 class="sub-heading">Login back to your account</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="email" class="form-label">First name</label>
                    <input type="email" name="email" id="email" class="form-input" value="<?= http::input("email"); ?>" required>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-input" value="<?= http::input("password"); ?>" required>
                </div>
            </div>
            <div class="card-foot">
                <button class="btn btn-primary btn-block" type="submit">Login</button>
            </div>
        </form>
    </main>
    <?php utils::component("footer"); ?>
</body>

</html>