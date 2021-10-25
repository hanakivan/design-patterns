<?php

class Adaptee {

    public function makeRequest(array $data)
    {
        echo "adaptee processing data as array";
        print_r($data);
    }
}