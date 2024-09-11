<?php

class Request
{

    public static function get($key)
    {
        return $_GET[$key] ?? null;
    }
    public static function post($key)
    {
        return $_POST[$key] ?? null;
    }
    public static function hasGet($key)
    {
        return self::get($key) ?? false;
    }

    public static function hasPost($key)
    {
        return self::post($key) ?? false;
    }

    public static function getAllGet()
    {
        return $_GET;
    }

    public static function getAllPost()
    {
        return $_POST;
    }

}
