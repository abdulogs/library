<?php require_once "./app/bootstrap.php"; ?>
<?php utils::module("users"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User details</title>
</head>

<body>
    <?php $user = users::single(); ?>

    <h1>User details</h1>
    <a href="users.php">Go back</a>
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

</body>

</html>