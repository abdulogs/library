<?php
class users extends database
{
    public static function listing()
    {
        try {
            $stmt = "SELECT * FROM `users` ORDER BY `id` DESC";
            $query = parent::$con->prepare($stmt);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $data = $query->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public static function single()
    {
        try {
            $id = http::input("id");

            $stmt = "SELECT * FROM `users` WHERE id={$id} ";
            $query = parent::$con->prepare($stmt);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $data = $query->fetch();
            return $data;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public static function create()
    {
        if (http::is_method("post")) {
            $first_name = http::input("first_name");
            $last_name = http::input("last_name");
            $email = http::input("email");
            $password = http::input("password");
            $is_role = http::input("is_role");
            $country = http::input("country");
            $state = http::input("state");
            $city = http::input("city");
            $address = http::input("address");
            $postal_code = http::input("postal_code");
            $phone = http::input("phone");
            $is_active = http::input("is_active");
            $created_at = date('Y-m-d H:i:s');
            $updated_at = date('Y-m-d H:i:s');

            try {
                $stmt = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `phone`, `password`, `country`, `state`, `city`, `address`, 
                `postal_code`, `is_role`, `is_active`, `created_at`, `updated_at`) 
                VALUES ('{$first_name}','{$last_name}','{$email}','{$phone}','{$password}','{$country}','{$state}','{$city}','{$address}',
                '{$postal_code}','{$is_role}','{$is_active}','{$created_at}','{$updated_at}')";
                $query = parent::$con->prepare($stmt);
                $data = $query->execute();
                http::redirect("users.php");

                return $data;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    public static function update()
    {
        if (http::is_method("post")) {
            try {
                $id = http::input("id");
                $first_name = http::input("first_name");
                $last_name = http::input("last_name");
                $email = http::input("email");
                $password = http::input("password");
                $is_role = http::input("is_role");
                $country = http::input("country");
                $state = http::input("state");
                $city = http::input("city");
                $address = http::input("address");
                $postal_code = http::input("postal_code");
                $phone = http::input("phone");
                $is_active = http::input("is_active");
                $updated_at = date('Y-m-d H:i:s');

                $stmt = "UPDATE `users` SET `first_name`='{$first_name}', `last_name`='{$last_name}', `email`='{$email}', `password`='{$password}',
                `is_role`='{$is_role}', `country`='{$country}',`state`='{$state}', `city`='{$city}', `address`='{$address}', `postal_code`='{$postal_code}',
                `phone`='{$phone}',`is_active`='{$is_active}', `updated_at`='{$updated_at}'  WHERE id={$id}";
                $query = parent::$con->prepare($stmt);
                $data = $query->execute();
                http::redirect("users.php");

                return $data;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    public static function delete()
    {
        if (http::is_get("id")) {
            try {
                $id = http::input("id");
                $stmt = "DELETE FROM users WHERE id={$id}";
                $query = parent::$con->prepare($stmt);
                $query->execute();

                http::redirect("users.php");
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
}


$users = new users();
