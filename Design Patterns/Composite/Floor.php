<?php

require_once "./StructureInterface.php";

class Floor implements StructureInterface {

    private array $structures = [];

    public function __construct(private string $name)
    {

    }

    public function enter()
    {
        echo "entering through stairs or elevator";
    }

    public function exit()
    {
        echo "exiting through stairs or elevator.";
    }

    public function getLabel()
    {
        return "This is floor";
    }

    public function addStructure(StructureInterface $structure)
    {
        $this->structures[] = $structure;
    }
}