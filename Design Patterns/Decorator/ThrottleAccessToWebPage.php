<?php

require_once "./IWebpage.php";

class ThrottleAccessToWebPage extends WebPageDecorator {

    public function throttleAccess()
    {
        echo "maybe will throttle access";
    }

    public function display(): void
    {
        $this->throttleAccess();
        parent::display();
    }
}