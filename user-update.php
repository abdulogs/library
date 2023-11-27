<?php require_once "./app/bootstrap.php"; ?>

<?php utils::module("users"); ?>

<?php users::update(); ?>
<?php $user = users::single(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User update</title>
    <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
</head>

<body class="bg-light h-100 d-flex flex-column">
    <?php utils::component("navbar"); ?>

    <main class="container h-100">
        <nav class="m-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php" class=" text-dark text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="users.php" class="text-dark text-decoration-none">Users</a></li>
                <li class="breadcrumb-item active">Update</li>
            </ol>
        </nav>
        <div class="row justify-content-center h-100">
            <div class="col-sm-5 py-5">
                <form method="post" class="card shadow rounded-4 border p-3">
                    <div class="card-header bg-transparent border-0 pt-4">
                        <h3 class="fs-2 fw-bold mb-0">Update</h3>
                        <p class="fs-6 text-muted m-0">Modify user details</p>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="form-group mb-3 col-sm-6">
                                <label for="first_name" class="fw-bold mb-1">First Name</label>
                                <input type="hidden" name="id" id="id" value="<?= $user['id'] ?>">
                                <input type="text" name="first_name" id="first_name" class="form-control focus-ring focus-ring-success" value="<?= $user['first_name'] ?>" required>
                            </div>
                            <div class="form-group mb-3 col-sm-6">
                                <label for="last_name" class="fw-bold mb-1">Last name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control focus-ring focus-ring-success" value="<?= $user['last_name'] ?>" required>
                            </div>
                            <div class="form-group mb-3 col-sm-6">
                                <label for="email" class="fw-bold mb-1">Email</label>
                                <input type="text" name="email" id="email" class="form-control focus-ring focus-ring-success" value="<?= $user['email'] ?>" required>
                            </div>
                            <div class="form-group mb-3 col-sm-6">
                                <label for="phone" class="fw-bold mb-1">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control focus-ring focus-ring-success" value="<?= $user['phone'] ?>" required>
                            </div>
                            <div class="form-group mb-3 col-sm-6">
                                <label for="password" class="fw-bold mb-1">Password</label>
                                <input type="text" name="password" id="password" class="form-control focus-ring focus-ring-success" value="<?= $user['password'] ?>">
                            </div>
                            <div class="form-group mb-3 col-sm-6">
                                <label for="country" class="fw-bold mb-1">Country</label>
                                <input type="text" name="country" id="country" class="form-control focus-ring focus-ring-success" value="<?= $user['country'] ?>" required>
                            </div>
                            <div class="form-group mb-3 col-sm-6">
                                <label for="state" class="fw-bold mb-1">State</label>
                                <input type="text" name="state" id="state" class="form-control focus-ring focus-ring-success" value="<?= $user['state'] ?>" required>
                            </div>
                            <div class="form-group mb-3 col-sm-6">
                                <label for="city" class="fw-bold mb-1">City</label>
                                <input type="text" name="city" id="city" class="form-control focus-ring focus-ring-success" value="<?= $user['city'] ?>" required>
                            </div>
                            <div class="form-group mb-3 col-sm-6">
                                <label for="address" class="fw-bold mb-1">Address</label>
                                <input type="text" name="address" id="address" class="form-control focus-ring focus-ring-success" value="<?= $user['address'] ?>" required>
                            </div>
                            <div class="form-group mb-3 col-sm-6">
                                <label for="postal_code" class="fw-bold mb-1">Postal code</label>
                                <input type="text" name="postal_code" id="postal_code" class="form-control focus-ring focus-ring-success" value="<?= $user['postal_code'] ?>" required>
                            </div>
                            <div class="form-group mb-3 col-sm-6">
                                <label for="is_role" class="fw-bold mb-1">Is role</label>
                                <select name="is_role" id="is_role" class="form-control form-select focus-ring focus-ring-success" required>
                                    <option value="">Select</option>
                                    <?php utils::is_role("select", $user['is_role']); ?>
                                </select>
                            </div>
                            <div class="form-group mb-3 col-sm-6">
                                <label for="is_active" class="fw-bold mb-1">Is active</label>
                                <select name="is_active" id="is_active" class="form-control form-select focus-ring focus-ring-success" required>
                                    <option value="">Select</option>
                                    <?php utils::is_active("select", $user['is_active']); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent text-center border-0 pb-4">
                        <button class="btn btn-success w-100 fw-bold" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php utils::component("footer"); ?>
</body>

</html>