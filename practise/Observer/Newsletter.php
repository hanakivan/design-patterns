<?php

class Newsletter implements iSubject {

    private array $subscribers = [];

    public function getObservers(): array
    {
        return $this->subscribers;
    }

    public function register(iObserver $observer): void
    {
        $this->subscribers[] = $observer;
    }

    public function unregister(iObserver $observer): void
    {
        $this->subscribers[] = array_filter($this->subscribers, fn (iObserver $o) => $o !== $observer);
    }

    public function notify(iObserver $observer): void
    {
        array_map(fn(iObserver $observer) => $observer->update(), $this->subscribers);
    }
}