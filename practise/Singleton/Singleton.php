<?php

class Singleton {

    private static ?Singleton $instance = null;

    private function __construct() {

    }

    public static function getInstance(): static
    {
        if(self::$instance === null) {
            self::$instance = new static();
        }

        return self::$instance;
    }
}

$singleton = Singleton::getInstance();

var_dump($singleton);