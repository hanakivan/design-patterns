<?php

class CacheService {

    private static ?self $instance = null;

    private array $data = [];

    public static function getInstance(): self
    {
        if(self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct() {}

    public function hasItem(string $key): bool
    {
        return array_key_exists($key, $this->data);
    }

    public function getItem(string $key, mixed $defaultValue = null): mixed
    {
        if($this->hasItem($key)) {
            return $this->data[$key];
        }

        return $defaultValue;
    }

    public function putItem(string $key, mixed $value): void
    {
        $this->data[$key] = $value;
    }

    public function removeItem(string $key): void
    {
        if($this->hasItem($key)) {
            unset($this[$key]);
        }
    }
}