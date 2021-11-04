<?php

class EventListener {

    private array $eventListeners = [];

    private static self $instance;

    private function __construct() {

    }

    public static function getInstance(): static
    {
        if(self::$instance === null) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    public function addEventListener(string $eventName, callable $callback)
    {
        $this->eventListeners[$eventName] = $callback;
    }
}