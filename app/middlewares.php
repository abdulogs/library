<?php

class middleware
{
    public static function login($value, $path = "")
    {
        if (isset($_SESSION[$value])) {
            http::redirect($path);
        }
    }

    public static function logout($value, $path = "")
    {
        if (!isset($_SESSION[$value])) {
            http::redirect($path);
        }
    }


    public static function is_role($path, $role)
    {
        if ($_SESSION["is_role"] == $role) {
            http::redirect($path);
        }
    }

    public static function is_admin($path)
    {
        if ($_SESSION["is_role"] == 0) {
            http::redirect($path);
        }
    }

    public static function is_faculty($path)
    {
        if ($_SESSION["is_role"] == 1) {
            http::redirect($path);
        }
    }

    public static function is_student($path)
    {
        if ($_SESSION["is_role"] == 2) {
            http::redirect($path);
        }
    }
}
