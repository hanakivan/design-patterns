<?php

require_once "./IWebpage.php";

class BasicWebPage implements IWebpage {

    private array $stylesheets = [];
    private array $scripts = [];

    public function display(): void
    {
        echo "<html lang='en'></html>";
    }
}