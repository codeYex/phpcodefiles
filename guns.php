<?php

class guns1
{
    public $gunName;
    public $gunSerial;
    public $gunModel;

    //call the constructor
    public function __construct($gunName, $gunModel, $gunSerial)
    {
        $this->gunModel = $gunModel;
        $this->gunName = $gunName;
        $this->gunSerial = $gunSerial;
    }
    //write the method function
    public function gunDetail()
    {
        return "The {$this->gunName} was developed by Richard and model was {$this->gunModel}";
    }
}

$newGunDetail  = new guns1('AK47', '1947', 'ZE9320393-0000');
// echo $newGunDetail->gunDetail();
