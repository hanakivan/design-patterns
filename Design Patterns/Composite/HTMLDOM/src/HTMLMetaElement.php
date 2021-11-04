<?php

class HTMLMetaElement extends HTMLElement {
    public string $content = "";
    public string $name = "";

    private static array $optionalProperties = [
        "charset",
    ];

    public function __set($name, $value)
    {
        if(in_array($name, self::$optionalProperties)) {
            $this->$name = $value;
        }
    }

    public function __get($name)
    {
        if(in_array($name, self::$optionalProperties)) {
            if(property_exists($this, $name)) {
                return $this->$name;
            }
        }

        return null;
    }
}