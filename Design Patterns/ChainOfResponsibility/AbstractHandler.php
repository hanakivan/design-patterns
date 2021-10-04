<?php

require_once dirname(__FILE__)."/IHandler.php";
require_once dirname(__FILE__)."/HttpRequest.php";

abstract class AbstractHandler implements IHandler {

    private IHandler $nextHandler;

    public function setNext(IHandler $handler): IHandler
    {
        $this->nextHandler = $handler;

        return $handler;
    }

    public function handle(HttpRequest $request): ?HttpRequest
    {
        if (isset($this->nextHandler)) {
            return $this->nextHandler->handle($request);
        }

        return null;
    }
}