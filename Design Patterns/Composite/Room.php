<?php

require_once "./StructureInterface.php";

class Room implements StructureInterface {

    public function __construct(private string $name)
    {

    }

    public function enter()
    {
        echo "entering through single door";
    }

    public function exit()
    {
        echo "exiting through single door.";
    }

    public function getLabel()
    {
        return "This is a room";
    }
}