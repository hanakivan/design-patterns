<?php

interface Shape {

    public function getWidth(): int;
    public function getHeight(): int;
    public function getX(): int;
    public function getY(): int;

    public function setX(int $x);
    public function setY(int $y);

    public function getBorderColor(): string;
    public function getBorderWidth(): int;
    public function getFillColor(): string;
}