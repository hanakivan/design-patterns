<?php

class Rectangle implements Shape
{
    public function __construct(private int $width, private int $height, private int $x, private int $y)
    {

    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function setX(int $x)
    {
        $this->x = $x;
    }

    public function setY(int $y)
    {
        $this->y = $y;
    }

    public function getBorderColor(): string
    {
        return "#0088CC";
    }

    public function getBorderWidth(): int
    {
        return 3;
    }

    public function getFillColor(): string
    {
        return "#FFFFFF";
    }
}