<?php
class utils
{
    public static function is_active($type = "badge", $value = null)
    {
        if ($type == "badge") {
            echo ($value) ? "Active" : "Inactive";
        } else if ($type == "select") {
            echo ($value) ? "<option value='1' selected>Active</option><option value='0'>Inactive</option>" : "<option value='1'>Active</option><option value='0' selected>Inactive</option>";
        }
    }

    public static function is_status($value = null)
    {
        echo ($value) ? "Yes" : "No";
    }

    public static function is_role($type = "badge", $value = null)
    {
        $roles = ["0" => "Admin", "1" => "Faculty", "2" => "Student"];
        if ($type == "badge") {
            foreach ($roles as $key => $item) {
                echo ($key == $value) ? $item : "";
            }
        } else if ($type == "select") {
            $template = "";
            foreach ($roles as $key => $item) {
                $selected = ($key == $value) ? "selected" : "";
                $template .= "<option value='{$key}' {$selected}>{$item}</option>";
            }
            echo $template;
        }
    }

    public static function module($name)
    {
        $filename =  "modules/" . $name . ".php";
        if (file_exists($filename)) {
            require_once $filename;
        } else {
            die("Module file not exists " . $name);
        }
    }

    public static function component($name)
    {
        $filename =  "components/" . $name . ".php";
        if (file_exists($filename)) {
            require_once $filename;
        } else {
            die("component file not exists " . $name);
        }
    }
}
