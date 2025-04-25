<?php


class personnel
{
    public $name;

    public $status;
    public $salary_structure;

    public function __construct($name, $salary_structure, $status)
    {
        $this->name = $name;
        $this->salary_structure = $salary_structure;
        $this->status = $status;
    }

    //write the method function

    public function employeeData()
    {
        return "This {$this->name} is now {$this->status} and his new salary is {$this->salary_structure}";
    }
}

$myPersonnel = new personnel("Henry Francis", 2000000, "Deserted");

// echo $myPersonnel->employeeData();
