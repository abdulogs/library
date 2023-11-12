<?php

class http
{

    public static function input($value, $default = null)
    {
        if (isset($_GET[$value])) {
            return $_GET[$value];
        } else if (isset($_POST[$value])) {
            return $_POST[$value];
        } else if (isset($_REQUEST[$value])) {
            return $_REQUEST[$value];
        } else {
            return $default;
        }
    }

    public static function is_get($value, $default = null)
    {
        if (isset($_GET[$value])) {
            return true;
        } else {
            return false;
        }
    }

    public static function is_post($value, $default = null)
    {
        if (isset($_POST[$value])) {
            return true;
        } else {
            return false;
        }
    }
    public static function is_method($value)
    {
        if ($_SERVER["REQUEST_METHOD"] == strtoupper($value)) {
            return true;
        } else {
            return false;
        }
    }

    public static function redirect($value)
    {
        echo "<script>location.href = '{$value}';</script>";
    }
}
