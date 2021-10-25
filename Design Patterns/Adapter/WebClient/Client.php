<?php

class Client {

    public function __construct(private TargetInterface $target)
    {

    }

    public function doWork()
    {
        $data = new stdClass();
        $data->param1 = "data1";
        $data->param2 = "data2";

        $this->target->makeRequest($data);
    }
}