<?php

class session
{

	public static function set($key, $value)
	{
		$_SESSION[$key] = $value;
	}

	public static function get($key)
	{
		if (isset($_SESSION[$key])) {
			return $_SESSION[$key];
		} else {
			return false;
		}
	}

	public static function role($key, $val)
	{
		if (isset($_SESSION[$key])) {
			if ($_SESSION[$key] == $val) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
}
