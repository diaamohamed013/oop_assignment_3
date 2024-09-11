<?php

class Session
{

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    public static function get($key)
    {
        return $_SESSION[$key] ?? null ;
    }
    public static function has($key)
    {
        return self::get($key) ?? false;
    }

    public static function delete($key){
        if(self::has($key)){
            unset($_SESSION[$key]);
        }
    }

    public static function flash($key)
    {
        if (self::has($key)) {
            $value = self::get($key);
            self::delete($key);
            return $value;
        }
        return null;
    }

    public static function getAll()
    {
        return $_SESSION;
    }

    public static function remove($key)
    {
        unset($_SESSION[$key]);
    }

    public static function removeAll()
    {
        session_destroy();
        session_start();
        $_SESSION = [];
    }

    public static function check($key)
    {
        if (isset($_SESSION[$key])) {
            return true;
        }
        return false;
    }
}
