<?php require_once "./app/bootstrap.php"; ?>
<?php utils::module("users"); ?>
<?php users::create(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user create</title>
</head>

<body>

    <h1>user create</h1>
    <a href="users.php">Go back</a>
    <form method="post">
        <div class="form-group">
            <label for="first_name">first_name</label>
            <input type="text" name="first_name" id="first_name" required>
        </div>
        <div class="form-group">
            <label for="last_name">last_name</label>
            <input type="text" name="last_name" id="last_name" required>
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="phone">phone</label>
            <input type="text" name="phone" id="phone" required>
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="text" name="password" id="password" required>
        </div>
        <div class="form-group">
            <label for="country">country</label>
            <input type="text" name="country" id="country" required>
        </div>
        <div class="form-group">
            <label for="state">state</label>
            <input type="text" name="state" id="state" required>
        </div>
        <div class="form-group">
            <label for="city">city</label>
            <input type="text" name="city" id="city" required>
        </div>
        <div class="form-group">
            <label for="address">address</label>
            <input type="text" name="address" id="address" required>
        </div>
        <div class="form-group">
            <label for="postal_code">postal_code</label>
            <input type="text" name="postal_code" id="postal_code" required>
        </div>
        <div class="form-group">
            <label for="is_active">Is active</label>
            <select name="is_active" id="is_active" required>
                <option value="">Select</option>
                <?= utils::is_active("select"); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="is_role">Is active</label>
            <select name="is_role" id="is_role" required>
                <option value="">Select</option>
                <?= utils::is_role("select"); ?>
            </select>
        </div>
        <button type="submit">Create</button>
    </form>
</body>

</html>