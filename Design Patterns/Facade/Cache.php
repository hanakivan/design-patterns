<?php

require_once "./CacheService.php";

//facade
class Cache {

    public static function get(string $key)
    {
        return CacheService::getInstance()->getItem($key);
    }

    public static function has(string $key)
    {
        return CacheService::getInstance()->hasItem($key);
    }

    public static function put(string $key, mixed $value)
    {
        CacheService::getInstance()->putItem($key, $value);
    }

    public static function remove(string $key)
    {
        CacheService::getInstance()->removeItem($key);
    }
}