<?php
class books extends database
{
    public static function listing()
    {
        try {
            $stmt = "SELECT * FROM books ORDER BY `id` DESC";
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

            $stmt = "SELECT * FROM books WHERE id={$id} ";
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
            $name = http::input("name");
            $edition = http::input("edition");
            $author = http::input("author");
            $description = http::input("description");
            $copies = http::input("copies");
            $is_active = http::input("is_active");
            $created_by = session::get("auth_id");
            $created_at = date('Y-m-d H:i:s');
            $updated_at = date('Y-m-d H:i:s');

            try {
                $stmt = "INSERT INTO `books` (`name`, `edition`, `author`, `description`, `copies`, `is_active`, `created_by`,`created_at`,`updated_at`) 
                VALUES ('{$name}','{$edition}','{$author}','{$description}','{$copies}','{$is_active}','{$created_by}','{$created_at}','{$updated_at}')";
                $query = parent::$con->prepare($stmt);
                $data = $query->execute();
                http::redirect("books.php");

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
                $name = http::input("name");
                $edition = http::input("edition");
                $author = http::input("author");
                $description = http::input("description");
                $copies = http::input("copies");
                $is_active = http::input("is_active");
                $updated_at = date('Y-m-d H:i:s');

                $stmt = "UPDATE `books` SET `name`='{$name}', `edition`='{$edition}', `author`='{$author}', `description`='{$description}',
                `copies`='{$copies}', `is_active`='{$is_active}', `updated_at`='{$updated_at}',  WHERE id={$id}";
                $query = parent::$con->prepare($stmt);
                $data = $query->execute();
                http::redirect("books.php");

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
                $stmt = "DELETE FROM books WHERE id={$id}";
                $query = parent::$con->prepare($stmt);
                $query->execute();

                http::redirect("books.php");
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    public static function library()
    {
        try {
            $stmt = "SELECT * FROM books WHERE `is_active` = 1 ORDER BY `id` DESC";
            $query = parent::$con->prepare($stmt);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $data = $query->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function borrow()
    {
        if (http::is_method("POST") & http::input("borrow") == 1) {
            $book_id = http::input("id");
            $return_date = http::input("date");
            $is_returned = 0;
            $is_agreed = 1;
            $student_id = session::get("auth_id");
            $created_at = date('Y-m-d H:i:s');
            $updated_at = date('Y-m-d H:i:s');

            try {
                $stmt = "INSERT INTO `borrow_books` (`student_id`, `book_id`,`return_date`,`is_returned`,`is_agreed`,`created_at`,`updated_at`) 
                VALUES ('{$student_id}','{$book_id}','{$return_date}','{$is_returned}','{$is_agreed}','{$created_at}','{$updated_at}')";
                $query = parent::$con->prepare($stmt);
                $data = $query->execute();
                http::redirect("books.php");

                return $data;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
}


$books = new books();
