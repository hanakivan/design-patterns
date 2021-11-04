<?php

abstract class HTMLElement implements HTMLElementInterface {

    protected array $childElements = [];

    public string $innerHTML = "";
    public string $textContent = "";
    public string $lang = "en";
    public int  $tabIndex = 0;

    public string $tagName;

    public function addChildElement(HTMLElementInterface $element)
    {
        $this->childElements[] = $element;
    }

    public function removeChildElement(HTMLElementInterface $element)
    {
        $this->childElements = array_filter($this->childElements, fn(Shape $e) => $e !== $element);
    }

    public function appendTo(HTMLElementInterface $element) {
        $element->addChildElement($this);
    }
}