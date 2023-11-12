<?php require_once "./app/bootstrap.php"; ?>
<?php utils::module("account"); ?>
<?php account::login(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <h1>Login</h1>
    <form method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" required>
        </div>
        <button type="submit">login</button>
    </form>
</body>

</html>