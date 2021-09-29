<?php

interface IComponent {
    public function play(): void;
    public function setPlaybackSpeed(float $speed): void;
    public function getName(): string;
}