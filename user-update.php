<?php require_once "./app/bootstrap.php"; ?>

<?php utils::module("users"); ?>

<?php users::update(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User update</title>
</head>

<body>

    <?php $user = users::single(); ?>
    <h1>User update</h1>
    <a href="users.php">Go back</a>
    <form method="post">
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="hidden" name="id" id="id" value="<?= $user['id'] ?>">
            <input type="text" name="first_name" id="first_name" value="<?= $user['first_name'] ?>" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last name</label>
            <input type="text" name="last_name" id="last_name" value="<?= $user['last_name'] ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?= $user['email'] ?>" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" value="<?= $user['phone'] ?>" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" value="<?= $user['password'] ?>">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" value="<?= $user['address'] ?>" required>
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" name="country" id="country" value="<?= $user['country'] ?>" required>
        </div>
        <div class="form-group">
            <label for="state">State</label>
            <input type="text" name="state" id="state" value="<?= $user['state'] ?>" required>
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" id="city" value="<?= $user['city'] ?>" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" value="<?= $user['address'] ?>" required>
        </div>
        <div class="form-group">
            <label for="postal_code">Postal code</label>
            <input type="text" name="postal_code" id="postal_code" value="<?= $user['postal_code'] ?>" required>
        </div>
        <div class="form-group">
            <label for="is_role">Is role</label>
            <select name="is_role" id="is_role" required>
                <option value="">Select</option>
                <?php utils::is_role("select", $user['is_role']); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="is_active">Is active</label>
            <select name="is_active" id="is_active" required>
                <option value="">Select</option>
                <?php utils::is_active("select", $user['is_active']); ?>
            </select>
        </div>
        <button type="submit">Update</button>
    </form>

</body>

</html>