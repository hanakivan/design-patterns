<?php

require_once dirname(__FILE__)."/HttpRequest.php";
require_once dirname(__FILE__)."/AbstractHandler.php";

class HttpsHandler extends AbstractHandler {

    public function handle(HttpRequest $request): ?HttpRequest
    {
        echo PHP_EOL;
        echo "is ssl";

        $request->addHeader("X-Is-HTTPS", true);

        return parent::handle($request);
    }
}