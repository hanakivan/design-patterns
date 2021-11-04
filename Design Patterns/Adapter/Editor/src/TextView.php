<?php

class TextView {

    public function __construct(private string $value) {

    }

    public function updateBoundingBox(int $width = null, int $height = null, int $x = null, int $y = null)
    {
        $boundingBox = $this->boundingBox();

        $boundingBox["width"] = $width ?? $boundingBox["width"];
        $boundingBox["height"] = $height ?? $boundingBox["height"];
        $boundingBox["x"] = $x ?? $boundingBox["x"];
        $boundingBox["y"] = $y ?? $boundingBox["y"];

        //todo set the bounding box
    }

    /**
     * @return array{width: int, height: int, x: int, y: int}
     */
    public function boundingBox(): array
    {
        return [
            "width" => $this->measureWidth(),
            "height" => $this->measureHeight(),
            "x" => $this->getPositionX(),
            "y" => $this->getPositionY(),
        ];
    }

    public function getPositionY()
    {
        return 12;
    }

    public function getPositionX()
    {
        return 4;
    }

    public function measureHeight()
    {
        return 30;
    }

    public function measureWidth()
    {
        return 100;
    }

    public function isEmpty()
    {
        return mb_strlen($this->value) === 0;
    }

    public function getTextColor(): string
    {
        return "#000000";
    }
}