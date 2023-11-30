<?php

class auth extends database
{

    public static function is_authenticated()
    {
        if (isset($_SESSION["auth_id"])) {
            return true;
        } else {
            return false;
        }
    }

    public static function is_admin()
    {
        if ($_SESSION["is_role"] == 0) {
            return true;
        }
        return false;
    }

    public static function is_faculty()
    {
        if ($_SESSION["is_role"] == 1) {
            return true;
        }
        return false;
    }

    public static function is_student()
    {
        if ($_SESSION["is_role"] == 2) {
            return true;
        }
        return false;
    }


    public static function user()
    {

        try {
            if (isset($_SESSION['is_role'])) {
                $stmt = "SELECT * FROM `users` WHERE `is_role` = {$_SESSION['is_role']}";
                $query = parent::$con->prepare($stmt);
                $query->execute();
                $query->setFetchMode(PDO::FETCH_ASSOC);
                $data = $query->fetch();
                return $data;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

$user = auth::user();
