<?php


// echo(min(20,10,9,200,29));
// echo (max(300,10,2000,10,230,3));
// echo(abs(-3.9));
// echo sqrt(9);
//echo(round(1.38));
//  echo(round(4.1));

//Random numbers
//echo(rand(1,90)
// define("GREETING" , "Hello Programmer, how are you today");
// echo GREETING;
// const MYCAR = "Mercedese benz";
// define("cars", [
//     "Alpha romeo",
//     "BMW",
//     "Toyota",
//     "G wargon"

// ]);
// echo cars[3];
// var_dump(cars);

//CLASSES
class car
{
    public $make;
    public $model;
    public $year;  //properties which are variables 

    //after creating the object we call the constructor
    public function __construct($make, $model, $year)
    {
        //assign values to properties
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    //method function
    public function startEngine()
    {
        return "The {$this->make} {$this->model} 's engine is now running and driver is ready to move";
    }
}

//create an object
$myCar = new Car("Honda" , "Honda XL 125L" , 2000);
// echo $myCar->make;
// echo $myCar->model;
// echo $myCar->year;

//call the method
echo $myCar->startEngine();