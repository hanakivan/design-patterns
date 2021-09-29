<?php

require_once "./IComponent.php";

class Playlist implements IComponent {

    /**
     * @var array<IComponent> $songs
     */
    private array $songs = [];

    public function __construct(private string $name)
    {

    }

    public function add(IComponent $song)
    {
        $this->songs[] = $song;
    }

    public function play(): void
    {
        foreach($this->songs as $song) {
            $song->play();
        }
    }

    public function setPlaybackSpeed(float $speed): void
    {
        foreach($this->songs as $song) {
            $song->setPlaybackSpeed(1.0);
        }
    }

    public function getName(): string
    {
        return sprintf("Playlist: %s", $this->name);
    }
}