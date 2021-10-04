<?php

require_once dirname(__FILE__)."/AbstractHandler.php";
require_once dirname(__FILE__)."/AuthHandler.php";
require_once dirname(__FILE__)."/HttpsHandler.php";
require_once dirname(__FILE__)."/HttpRequest.php";
require_once dirname(__FILE__)."/UserHandler.php";

$request = new HttpRequest();
$auth = new AuthHandler();
$http = new HttpsHandler();
$user = new UserHandler();

$auth->setNext($http)->setNext($user);

$auth->handle($request);