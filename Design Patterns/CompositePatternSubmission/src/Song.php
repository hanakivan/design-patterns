<?php

require_once "./IComponent.php";

class Song implements IComponent {

    public function __construct(private string $name, private string $artist)
    {

    }

    public function play(): void
    {
        echo sprintf("%s - starts playing", $this->getName());
    }

    public function setPlaybackSpeed(float $speed): void
    {
        echo sprintf("Setting playback speed to: %d", $speed);
    }

    public function getName(): string
    {
        return sprintf("%s - %s", $this->artist, $this->name);
    }
}