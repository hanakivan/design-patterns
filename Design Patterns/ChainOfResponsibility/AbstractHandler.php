<?php

require_once "./IHandler.php";

abstract class AbstractHandler implements IHandler {

    private IHandler $nextHandler;

    public function setNext(IHandler $handler): IHandler
    {
        $this->nextHandler = $handler;

        return $handler;
    }
}