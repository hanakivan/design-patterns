<?php

class TextShape implements Shape {

    public function __construct(private TextView $textView)
    {

    }

    public function getWidth(): int
    {
        return $this->textView->boundingBox()["width"];
    }

    public function getHeight(): int
    {
        return $this->textView->boundingBox()["height"];
    }

    public function getX(): int
    {
        return $this->textView->boundingBox()["x"];
    }

    public function getY(): int
    {
        return $this->textView->boundingBox()["y"];
    }

    public function setX(int $x)
    {
        $this->textView->updateBoundingBox(null, null, $x);
    }

    public function setY(int $y)
    {
        $this->textView->updateBoundingBox(null, null, null, $y);
    }

    public function getBorderColor(): string
    {
        return "rgba(0,0,0,0)";
    }

    public function getBorderWidth(): int
    {
        return 0;
    }

    public function getFillColor(): string
    {
        return $this->textView->getTextColor();
    }
}