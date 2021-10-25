<?php

class Adapter implements TargetInterface {

    private Adaptee $adaptee;

    public function connect(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function makeRequest(stdClass $data)
    {
        $data = json_encode($data);
        $data = [
            "raw_data" => $data,
        ];
        
        $this->adaptee->makeRequest($data);
    }
}