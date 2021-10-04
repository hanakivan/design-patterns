<?php

final class HttpRequest {

    public function method(): string
    {
        return "GET";
    }

    public function ssl(): bool
    {
        return true;
    }
}