<?php

require_once dirname(__FILE__)."/src/HTMLElementInterface.php";
require_once dirname(__FILE__)."/src/HTMLElement.php";
require_once dirname(__FILE__)."/src/Element.php";
require_once dirname(__FILE__)."/src/HeadingElement.php";
require_once dirname(__FILE__)."/src/HTMLMetaElement.php";

$root = new Element("html");

$head = new Element("head");
$head->appendTo($root);

$body = new Element("body");
$body->appendTo($root);


//head stuff
$title = new Element("title");
$title->textContent = "My Page";
$title->appendTo($head);

$encoding = new HTMLMetaElement();
$encoding->charset = "utf-8";
$encoding->appendTo($head);

$container = new Element("div");
$container->appendTo($body);

$pageTitle = new HeadingElement(1);
$pageTitle->textContent = "Hello fella";
$pageTitle->appendTo($container);

echo "structure";
print_r($root);