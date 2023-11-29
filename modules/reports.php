<?php
class reports extends database
{
    public static function books()
    {
        try {
            $stmt = "SELECT COUNT(*) AS `books` FROM `books` WHERE NOT `copies` = 0";
            $query = parent::$con->prepare($stmt);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $data = $query->fetch();
            return $data["books"];
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function borrow_books()
    {
        try {
            $stmt = "SELECT COUNT(*) AS `books` FROM `borrow_books` WHERE `is_returned` = 0";
            $query = parent::$con->prepare($stmt);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $data = $query->fetch();
            return $data["books"];
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function admins()
    {
        try {
            $stmt = "SELECT COUNT(*) AS `users` FROM `users` WHERE `is_role` = 0";
            $query = parent::$con->prepare($stmt);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $data = $query->fetch();
            return $data["users"];
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function faculty()
    {
        try {
            $stmt = "SELECT COUNT(*) AS `users` FROM `users` WHERE `is_role` = 1";
            $query = parent::$con->prepare($stmt);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $data = $query->fetch();
            return $data["users"];
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function students()
    {
        try {
            $stmt = "SELECT COUNT(*) AS `users` FROM `users` WHERE `is_role` = 2";
            $query = parent::$con->prepare($stmt);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $data = $query->fetch();
            return $data["users"];
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}


$reports = new reports();
