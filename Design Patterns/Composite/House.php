<?php

require_once "./StructureInterface.php";

class House implements StructureInterface {

    private array $structures = [];

    public function __construct(private string $name)
    {

    }

    public function enter()
    {
        echo "entering through front door";
    }

    public function exit()
    {
        echo "exiting through the back door.";
    }

    public function getLabel()
    {
        return "This is house";
    }

    public function addStructure(StructureInterface $structure)
    {
        $this->structures[] = $structure;
    }
}