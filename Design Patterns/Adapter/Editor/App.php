<?php

$editor = new DrawingEditor();
$editor->addShape(new Rectangle(10, 10, 0, 0));

$textView = new TextView("Lorem ipsum");
$editor->addShape(new TextShape($textView));

EventListener::getInstance()->addEventListener("mousemove", function ($event, $target, int $e, int $y) {
    if($target instanceof Shape) {
        $target->setX($y);
        $target->sety($y);
    }
});