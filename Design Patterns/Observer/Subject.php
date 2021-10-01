<?php

abstract class Subject {

    /**
     * @var array<IObserver>
     */
    private array $observers = [];

    public function registerObserver(IObserver $observer): void {
        $this->observers[] = $observer;
    }

    public function unregisterObserver(IObserver $observer): void {
        array_unshift($this->observers);
    }

    public function notify(): void
    {
        foreach($this->observers as $observer) {
            $observer->update();
        }
    }
}