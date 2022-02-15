<?php

interface iSubject {

    public function getObservers(): array;

    public function register(iObserver $observer): void;
    public function unregister(iObserver $observer): void;
    public function notify(iObserver $observer): void;
}