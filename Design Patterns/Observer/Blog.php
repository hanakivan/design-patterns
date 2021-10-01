<?php

require_once "./Subject.php";

final class Blog extends Subject {
    private string $state;

    public function getState()
    {
        return $this->state;
    }
}

$blog = new Blog();