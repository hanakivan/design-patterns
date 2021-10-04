<?php

require_once dirname(__FILE__)."/HttpRequest.php";

interface  IHandler {
    public function handle(HttpRequest $request): ?HttpRequest;

    public function setNext(IHandler $handler): IHandler;
}