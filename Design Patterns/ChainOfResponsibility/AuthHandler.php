<?php

require_once dirname(__FILE__)."/HttpRequest.php";
require_once dirname(__FILE__)."/AbstractHandler.php";

class AuthHandler extends AbstractHandler {

    public function handle(HttpRequest $request): ?HttpRequest
    {
        echo PHP_EOL;
        echo "is get";

        $request->addHeader("X-User-Auth", true);

        return parent::handle($request);
    }
}