<?php

require_once dirname(__FILE__)."/TargetInterface.php";
require_once dirname(__FILE__)."/Adaptee.php";
require_once dirname(__FILE__)."/Adapter.php";
require_once dirname(__FILE__)."/Client.php";

$adaptee = new Adaptee();
$adapter = new Adapter();
$adapter->connect($adaptee);
$client = new Client($adapter);
$client->doWork();