<?php

class DrawingEditor {

    private array $shapes = [];

    public function addShape(Shape $shape)
    {
        $this->shapes[] = $shape;
    }

    public function removeShape(Shape $shape)
    {
        $this->shapes = array_filter($this->shapes, fn(Shape $sh) => $sh !== $shape);
    }

    public function moveShapeTo(Shape $shape, int $x, $y)
    {
        $shape->setX($x);
        $shape->setX($y);

        $this->rerender();
    }

    private function rerender()
    {
        //do stuff
    }
}