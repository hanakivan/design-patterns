<?php

class Singleton {

    private static ?Singleton $instance = null;

    public static function getInstance()
    {
        if(self::$instance === null) {
            self::$instance = new static("Ivanko");
        }

        return self::$instance;
    }


    private function __construct(private string $name) {

    }

    public function getName()
    {
        return $this->name;
    }
}

$object = Singleton::getInstance();

echo $object->getName();