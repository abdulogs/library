<?php require_once "./app/bootstrap.php"; ?>

<?php utils::module("users"); ?>

<?php users::update(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User update</title>
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
</head>

<body class="primary-layout">
    <?php utils::component("navbar"); ?>
    <?php $user = users::single(); ?>
    <main class="content">
        <form method="post" class="form-card">
            <div class="card-head">
                <h3 class="heading">Update user</h3>
                <h4 class="sub-heading">Update registered user details</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="hidden" name="id" id="id" value="<?= $user['id'] ?>">
                    <input type="text" name="first_name" id="first_name" class="form-input" value="<?= $user['first_name'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="last_name" class="form-label">Last name</label>
                    <input type="text" name="last_name" id="last_name" class="form-input" value="<?= $user['last_name'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-input" value="<?= $user['email'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-input" value="<?= $user['phone'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" name="password" id="password" class="form-input" value="<?= $user['password'] ?>">
                </div>
                <div class="form-group">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" id="address" class="form-input" value="<?= $user['address'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" name="country" id="country" class="form-input" value="<?= $user['country'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="state" class="form-label">State</label>
                    <input type="text" name="state" id="state" class="form-input" value="<?= $user['state'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="city" class="form-label">City</label>
                    <input type="text" name="city" id="city" class="form-input" value="<?= $user['city'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" id="address" class="form-input" value="<?= $user['address'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="postal_code" class="form-label">Postal code</label>
                    <input type="text" name="postal_code" id="postal_code" class="form-input" value="<?= $user['postal_code'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="is_role" class="form-label">Is role</label>
                    <select name="is_role" id="is_role" class="form-input" required>
                        <option value="">Select</option>
                        <?php utils::is_role("select", $user['is_role']); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="is_active" class="form-label">Is active</label>
                    <select name="is_active" id="is_active" class="form-input" required>
                        <option value="">Select</option>
                        <?php utils::is_active("select", $user['is_active']); ?>
                    </select>
                </div>
            </div>
            <div class="card-foot">
                <button class="btn btn-primary btn-block" type="submit">Create</button>
            </div>
        </form>
    </main>
    <?php utils::component("footer"); ?>
</body>

</html>