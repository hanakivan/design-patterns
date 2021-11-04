<?php

class HeadingElement extends Element {

    public function __construct (public int $level) {
        parent::__construct("h{$level}");
    }
}