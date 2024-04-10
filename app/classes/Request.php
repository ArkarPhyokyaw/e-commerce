<?php

namespace App\Classes;

class Request
{
    public static function all($is_array = false)
    {
        $result = [];
        if (count($_GET) > 0) $result["get"] = $_GET;
        if (count($_POST) > 0) $result["post"] = $_POST;
        $result["file"] = $_FILES;
        return $is_array ? $result : (object) $result;//here prepation neeed 
    }

    public static function get($key)
    {
        return self::all()->$key;
    }

    public static function has($key)
    {
        return array_key_exists($key, self::all(true)) ? true : false;
    }

    public static function old($key, $value)
    {
        $all = self::all(true);
        return isset($all[$key][$value]) ? $all[$key][$value] : "";
    }

    public static function refresh()
    {
        $_GET = [];
        $_POST = [];
        $_FILES = [];
    }
}

?>
