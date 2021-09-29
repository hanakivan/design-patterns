<?php

require_once "./IWebpage.php";
require_once "./WebPageDecorator.php";

abstract class WebPageDecorator implements IWebpage {
    
    public function __construct(protected IWebpage $webpage)
    {
        
    }

    public function display(): void
    {
        $this->webpage->display();
    }
}