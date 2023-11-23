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
</head>

<body class="primary-layout">
    <?php utils::component("navbar"); ?>
    <main class="content">
        <form method="post" class="form-card">
            <div class="card-head">
                <h3 class="heading">Signup</h3>
                <h4 class="sub-heading">Create a new account</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="first_name" class="form-label">First name</label>
                    <input type="text" name="first_name" id="first_name" class="form-input" value="<?= http::input("first_name"); ?>" required>
                </div>
                <div class="form-group">
                    <label for="last_name" class="form-label">Last name</label>
                    <input type="text" name="last_name" id="last_name" class="form-input" value="<?= http::input("last_name"); ?>" required>
                </div>
                <div class="form-group" class="form-label">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-input" value="<?= http::input("email"); ?>" required>
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-input" value="<?= http::input("phone"); ?>" required>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-input" value="<?= http::input("password"); ?>" required>
                </div>
            </div>
            <div class="card-foot">
                <button class="btn btn-primary btn-block" type="submit">Signup</button>
            </div>
        </form>
    </main>
    <?php utils::component("footer"); ?>
</body>

</html>