<?php

final class HttpRequest {

    private array $headers = [];

    public function addHeader($name, $value) {
        $this->headers[$name] = $value;
    }

    public function method(): string
    {
        return "GET";
    }

    public function ssl(): bool
    {
        return true;
    }
}