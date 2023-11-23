<?php require_once "./app/bootstrap.php"; ?>
<?php utils::module("users"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User details</title>
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
</head>

<body class="primary-layout">
    <?php utils::component("navbar"); ?>
    <?php $user = users::single(); ?>
    <main class="content">
        <div class="detail-card">
            <div class="card-head">
                <h3 class="heading">User details</h3>
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <td>ID</td>
                        <td><?= $user["id"]; ?></td>
                    </tr>
                    <tr>
                        <td>First name</td>
                        <td><?= $user["first_name"]; ?></td>
                    </tr>
                    <tr>
                        <td>Last name</td>
                        <td><?= $user["last_name"]; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?= $user["email"]; ?></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><?= $user["phone"]; ?></td>
                    </tr>
                    <tr>
                        <td>Country</td>
                        <td><?= $user["country"]; ?></td>
                    </tr>
                    <tr>
                        <td>State</td>
                        <td><?= $user["state"]; ?></td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td><?= $user["city"]; ?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><?= $user["address"]; ?></td>
                    </tr>
                    <tr>
                        <td>Postal code</td>
                        <td><?= $user["postal_code"]; ?></td>
                    </tr>
                    <tr>
                        <td>Is Role</td>
                        <td><?= utils::is_role("badge", $user["is_role"]); ?></td>
                    </tr>
                    <tr>
                        <td>Active</td>
                        <td><?= utils::is_active("badge", $user["is_active"]); ?></td>
                    </tr>
                    <tr>
                        <td>Created at</td>
                        <td><?= $user["created_at"]; ?></td>
                    </tr>
                    <tr>
                        <td>Updated at</td>
                        <td><?= $user["updated_at"]; ?></td>
                    </tr>
                </table>
            </div>
            <div class="card-foot">
                <a href="users.php" class="btn btn-primary">Go back</a>
            </div>
        </div>
    </main>
    <?php utils::component("footer"); ?>

</body>

</html>