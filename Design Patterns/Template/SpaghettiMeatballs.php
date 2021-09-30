<?php

require_once "./PastaDish.php";

class SpaghettiMeatballs extends PastaDish {

    protected function addPasta(): void
    {
        echo "adding spaghettiii!";
    }

    protected function addSauce(): void
    {
        echo "adding tomatoe sauce";
    }

    protected function addProtein(): void
    {
        echo "adding parmidžán!";
    }

    protected function addGarnish(): void
    {
        echo "add some basil art the top";
    }
}