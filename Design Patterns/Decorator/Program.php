<?php

require_once "./BasicWebPage.php";
require_once "./AuthorizedWebPage.php";
require_once "./ThrottleAccessToWebPage.php";

class Program {

    public function __construct()
    {
        $webPage = new BasicWebPage();
        $authorizedWebPage = new AuthorizedWebPage($webPage);
        $throttled = new ThrottleAccessToWebPage($authorizedWebPage);

        $throttled->display();
    }
}