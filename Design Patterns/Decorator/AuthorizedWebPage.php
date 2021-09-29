<?php

require_once "./IWebpage.php";

class AuthorizedWebPage extends WebPageDecorator {

    public function authorizeUser()
    {
        echo "Authorizing user";
    }

    public function display(): void
    {
        $this->authorizeUser();
        parent::display();
    }
}