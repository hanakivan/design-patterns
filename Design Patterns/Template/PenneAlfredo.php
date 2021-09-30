<?php

require_once "./PastaDish.php";

class PenneAlfredo extends PastaDish {

    protected function addPasta(): void
    {
        echo "adding penne!";
    }

    protected function addSauce(): void
    {
        echo "adding a sour milk sauce";
    }

    protected function addProtein(): void
    {
        echo "adding some mozarela and niva";
    }

    protected function addGarnish(): void
    {
        echo "add some parsley";
    }
}