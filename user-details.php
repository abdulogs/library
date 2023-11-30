<?php require_once "./app/bootstrap.php"; ?>
<?php middleware::logout("auth_id", "login.php"); ?>
<?php middleware::is_student("library.php"); ?>
<?php utils::module("users"); ?>
<?php $user = users::single(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User details</title>
    <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
</head>

<body class="bg-light h-100 d-flex flex-column">
    <?php utils::component("navbar"); ?>
    <main class="container h-100 ">
        <nav class="m-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php" class=" text-dark text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="users.php" class="text-dark text-decoration-none">Users</a></li>
                <li class="breadcrumb-item active">Details</li>
            </ol>
        </nav>
        <div class="row justify-content-center h-100  overflow-auto">
            <div class="card shadow-sm rounded-4 border p-3">
                <div class="card-header  bg-transparent border-0 pt-4">
                    <h3 class="fs-2 fw-bold">User details</h3>
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <tr>
                            <td class="fw-bold">ID</td>
                            <td><?= $user["id"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">First name</td>
                            <td><?= $user["first_name"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Last name</td>
                            <td><?= $user["last_name"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Email</td>
                            <td><?= $user["email"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Phone</td>
                            <td><?= $user["phone"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Country</td>
                            <td><?= $user["country"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">State</td>
                            <td><?= $user["state"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">City</td>
                            <td><?= $user["city"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Address</td>
                            <td><?= $user["address"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Postal code</td>
                            <td><?= $user["postal_code"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Is Role</td>
                            <td><?= utils::is_role("badge", $user["is_role"]); ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Active</td>
                            <td><?= utils::is_active("badge", $user["is_active"]); ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Created at</td>
                            <td><?= $user["created_at"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Updated at</td>
                            <td><?= $user["updated_at"]; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer bg-transparent text-center border-0 pb-4">
                    <a href="users.php" class="btn btn-success fw-bold">Go back</a>
                </div>
            </div>
        </div>
    </main>
    <?php utils::component("footer"); ?>

</body>

</html>