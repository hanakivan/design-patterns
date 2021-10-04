<?php

require_once dirname(__FILE__)."/HttpRequest.php";
require_once dirname(__FILE__)."/AbstractHandler.php";

class UserHandler extends AbstractHandler {

    public function handle(HttpRequest $request): ?HttpRequest
    {
        echo PHP_EOL;
        echo "authorizing user";

        return parent::handle($request);
    }
}