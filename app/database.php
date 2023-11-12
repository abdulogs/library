<?php
class database
{
    private $hostname;
    private $database;
    private $password;
    private $username;
    public static $con;

    public function setHostname($value)
    {
        return $this->hostname = $value;
    }
    public function setUsername($value)
    {
        return $this->username = $value;
    }
    public function setPassword($value)
    {
        return $this->password = $value;
    }
    public function setDatabase($value)
    {
        return $this->database = $value;
    }
    public function connect()
    {
        try {
            $con = new PDO("mysql:host=$this->hostname;dbname=$this->database", $this->username, $this->password);
            // set the PDO error mode to exception
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return self::$con = $con;
        } catch (PDOException $e) {
            echo "Database connection failed: " . $e->getMessage();
        }
    }
}

$database = new database();
