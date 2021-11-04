<?php

$editor = new DrawingEditor();
$editor->addShape(new Rectangle(10, 10, 0, 0));

$textView = new TextView("Lorem ipsum");
$editor->addShape(new TextShape($textView));

EventListener::getInstance()->addEventListener("mousemove", function ($event, $target, int $x, int $y) use($editor) {
    if($target instanceof Shape) {
        $editor->moveShapeTo($target, $x, $y);
    }
});