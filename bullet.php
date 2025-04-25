<?php


require_once 'guns.php';

class bulletTypes extends guns1
{
    public $bulletType;

    public function __construct($gunName, $gunModel, $gunSerial, $bulletType)
    {
        //call the parent class
        parent::__construct($gunName, $gunModel, $gunSerial);
        $this->bulletType = $bulletType;
    }

    public function bulletMission()
    {
        return "The bullet type is : {$this->bulletType} and gun Model is {$this->gunModel}";
    }
}

$newBulletDetails = new bulletTypes('AK47', '1947', 'ASM-0930', 'Sharp');
echo $newBulletDetails ->bulletMission();