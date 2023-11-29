<?php require_once "./app/bootstrap.php"; ?>
<?php middleware::logout("id", "home.php"); ?>
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
        home
    </main>
    <?php utils::component("footer"); ?>
</body>

</html>