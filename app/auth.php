<?php

class auth
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
}
