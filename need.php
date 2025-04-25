<?php

require_once 'person.php';

class innerPeople extends personnel
{
    public $retirementAge; //NEW property added to the class
    //call the constructor
    public function __construct($name, $salary_structure, $status, $retirementAge)
    {
        //call the parent constructor first
        parent::__construct($name, $salary_structure, $status);

        $this->retirementAge = $retirementAge;
    }
    public function newAge()
    {
        return "{$this->name} is already {$this->status} and now earns {$this->salary_structure}.He will retire by {$this->retirementAge}";
    }
}

$myData = new innerPeople('Mark', '200000', 'Active', '60');
echo $myData->newAge();
