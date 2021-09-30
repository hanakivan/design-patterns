<?php

interface  IHandler {
    public function handle(string $request): void;

    public function setNext(IHandler $handler): IHandler;
}