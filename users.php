<?php require_once "./app/bootstrap.php"; ?>

<?php utils::module("users"); ?>
<?php users::delete(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
</head>

<body>

    <body class="primary-layout">
        <?php utils::component("navbar"); ?>
        <main class="content">
            <div class="table-card">
                <div class="card-head">
                    <h3 class="heading">Users</h3>
                </div>
                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Active</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Controls</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $listing = users::listing(); ?>
                            <?php if ($listing) : ?>
                                <?php foreach ($listing as $item) : ?>
                                    <tr>
                                        <td><?= $item["id"]; ?></td>
                                        <td><?= $item["first_name"]; ?></td>
                                        <td><?= $item["last_name"]; ?></td>
                                        <td><?= $item["email"]; ?></td>
                                        <td><?= $item["phone"]; ?></td>
                                        <td><?= utils::is_role("badge", $item["is_role"]); ?></td>
                                        <td><?= utils::is_active("badge", $item["is_active"]); ?></td>
                                        <td><?= $item["created_at"]; ?></td>
                                        <td><?= $item["updated_at"]; ?></td>
                                        <td>
                                            <a href="user-details.php?id=<?= $item["id"]; ?>">Details</a>
                                            <a href="user-update.php?id=<?= $item["id"]; ?>">Edit</a>
                                            <a href="users.php?id=<?= $item["id"]; ?>">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="9">No records exists</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <?php utils::component("footer"); ?>
    </body>

</html>