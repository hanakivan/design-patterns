<?php

require_once "./House.php";
require_once "./Floor.php";
require_once "./Room.php";

class Program {

    public function __construct() {
        $house = new House("AV Boulevard 32");
        $floor = new Floor("1st floor");
        $room = new Room("Living room");

        $floor->addStructure($room);
        $house->addStructure($floor);
    }
}