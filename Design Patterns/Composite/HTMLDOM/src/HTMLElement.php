<?php

abstract class HTMLElement {

    protected array $childElements = [];

    public string $innerHTML = "";
    public string $textContent = "";
    public string $lang = "en";
    public int  $tabIndex = 0;

    public string $tagName;

    public function addChildElement(HTMLElement $element)
    {
        $this->childElements[] = $element;
    }

    public function removeChildElement(HTMLElement $element)
    {
        $this->childElements = array_filter($this->childElements, fn(Shape $e) => $e !== $element);
    }

    public function appendTo(HTMLElement $element) {
        $element->addChildElement($this);
    }
}