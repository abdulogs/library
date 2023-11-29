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

    public static function single($id = null)
    {
        try {
            $id = http::input("id", $id);

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
            $image = http::files("image");
            $is_active = http::input("is_active");
            $created_by = session::get("auth_id");
            $created_at = date('Y-m-d H:i:s');
            $updated_at = date('Y-m-d H:i:s');

            $folder = "uploads/";
            $file =  time() . date("d") . date("y") . date("m") . basename($image["name"]);

            if ($image) {
                move_uploaded_file($image["tmp_name"], $folder . $file);
            }

            try {
                $stmt = "INSERT INTO `books` (`name`, `edition`, `author`, `description`, `copies`, `image`,`is_active`, `created_by`,`created_at`,`updated_at`) 
                VALUES ('{$name}','{$edition}','{$author}','{$description}','{$copies}','{$file}','{$is_active}','{$created_by}','{$created_at}','{$updated_at}')";
                $query = parent::$con->prepare($stmt);
                $data = $query->execute();
                msg::alert("1 Book created successfully");
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
                $image = http::files("image");
                $oimage = http::files("oimage");
                $copies = http::input("copies");
                $is_active = http::input("is_active");
                $updated_at = date('Y-m-d H:i:s');

                $folder = "uploads/";
                $file =  time() . date("d") . date("y") . date("m") . basename($image["name"]);

                if ($image) {
                    move_uploaded_file($image["tmp_name"], $folder . $file);
                    unlink($folder . $oimage);
                } else {
                    $file = $oimage;
                }

                $stmt = "UPDATE `books` SET `name`='{$name}', `edition`='{$edition}', `author`='{$author}', `description`='{$description}',
                `copies`='{$copies}',`image`='{$file}', `is_active`='{$is_active}', `updated_at`='{$updated_at}'  WHERE `id`={$id}";

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

    public static function is_borrow()
    {
        try {
            $id = http::input("id");
            $student_id = session::get("auth_id");

            $stmt = "SELECT * FROM `borrow_books` WHERE `book_id`={$id} AND `student_id`={$student_id} AND `is_returned`=0";
            $query = parent::$con->prepare($stmt);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $data = $query->fetch();
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
                $stmt = "INSERT INTO `borrow_books` (`student_id`, `book_id`,`returning_date`,`is_returned`,`is_agreed`,`created_at`,`updated_at`) 
                VALUES ('{$student_id}','{$book_id}','{$return_date}','{$is_returned}','{$is_agreed}','{$created_at}','{$updated_at}')";
                $query = parent::$con->prepare($stmt);
                $data = $query->execute();

                self::decrease_copy($book_id);
                msg::alert("Book borrowed successfully");
                http::redirect("borrow-book.php?id={$book_id}");
                return $data;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    public static function return()
    {
        if (http::is_method("post") & http::input("return") == 1) {
            $book_id = http::input("id");
            $student_id = session::get("auth_id");
            $returned_date = http::input("date");
            $updated_at = date('Y-m-d H:i:s');

            try {
                $stmt = "UPDATE `borrow_books` SET `returned_date`='{$returned_date}', `is_returned`=1,
                 `updated_at`='{$updated_at}' WHERE `book_id`={$book_id} AND `student_id`={$student_id}";
                $query = parent::$con->prepare($stmt);
                $query->execute();
                self::increase_copy($book_id);
                msg::alert("Book returned successfully");
                http::redirect("borrow-book.php?id={$book_id}");
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    public static function increase_copy(int $id)
    {
        $book = self::single($id);
        $copies = $book["copies"] + 1;

        try {
            $stmt = "UPDATE `books` SET `copies`='{$copies}' WHERE `id`={$id}";
            $query = parent::$con->prepare($stmt);
            $data = $query->execute();
            return $data;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function decrease_copy(int $id)
    {
        $book = self::single($id);
        $copies = ($book["copies"] == 0) ? 0 : $book["copies"] - 1;

        try {
            $stmt = "UPDATE `books` SET `copies`='{$copies}' WHERE `id`={$id}";
            $query = parent::$con->prepare($stmt);
            $data = $query->execute();
            return $data;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

$books = new books();
