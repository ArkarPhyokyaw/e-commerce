<?php

namespace App\Classes;

class Session
{
    public static function add($key, $value)
    {
        if (!self::has($key)) {
            $_SESSION[$key] = $value;
        } else {
            echo "Session key already exists: " . $key;
        }
    }

    public static function has($key)
    {
        return isset($_SESSION[$key]) ? true : false;
    }

    public static function remove($key)
    {
        if (self::has($key)) {
            unset($_SESSION[$key]);
        }
    }

    public static function get($key)
    {
        if(self::has($key))
        {
            return $_SESSION[$key];
        }else{
            return null;
        }
    }

    public static function replace($key,$value)
    {
        if(self::has($key))
        {
            self::remove($key);
        }
        self::add($key,$value);
    }

    public static function flash($key,$value="")
    {
        if(!empty($value))
        {
            self::replace($key,$value);
        }else{
            echo "<p class='alert alert-success'>".self::get($key)."</p>";
            self::remove($key);
        }
    }
}

?>
