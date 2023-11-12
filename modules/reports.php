<?php
class students extends database
{

    private $id;
    private $name;
    private $email;
    private $phone;

    public function __construct()
    {
        $this->id = http::input("id");
        $this->name = http::input("name");
        $this->email = http::input("email");
        $this->phone = http::input("phone");
    }

    public function listing()
    {
        try {
            $stmt = "SELECT * FROM students";
            $query = parent::$con->prepare($stmt);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $data = $query->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function create()
    {
        if (http::is_method("post")) {
            try {
                $stmt = "INSERT INTO `students`(`name`, `email`, `phone`) VALUES ('{$this->name}','{$this->email}','{$this->phone}')";
                $query = parent::$con->prepare($stmt);
                $data = $query->execute();
                http::redirect("students.php");

                return $data;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    public function update()
    {
        if (http::is_method("post")) {
            try {
                $stmt = "UPDATE `students` SET `name`='{$this->name}',`email`='{$this->email}',`phone`='{$this->phone}' WHERE id={$this->id}";
                $query = parent::$con->prepare($stmt);
                $data = $query->execute();
                http::redirect("students.php");

                return $data;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    public function delete()
    {
        if (http::is_get("id")) {
            try {
                $stmt = "DELETE FROM students WHERE id={$this->id}";
                $query = parent::$con->prepare($stmt);
                $query->execute();

                http::redirect("students.php");
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    public function single()
    {
        try {
            $stmt = "SELECT * FROM students WHERE id={$this->id}";
            $query = parent::$con->prepare($stmt);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $data = $query->fetch();
            return $data;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}


$students = new students();
