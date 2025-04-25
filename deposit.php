<?php 

class deposit{
public $deposits;
public $depositBalance;
public $depositMethod;


public function __construct($deposits, $depositBalance, $depositMethod){
    $this->deposits = $deposits;
    $this->depositBalance = $depositBalance;
    $this->depositMethod = $depositMethod; 
}

public function check_Deposits(){
    return " Your deposit balance is now : {$this->depositBalance} . Please only use {$this->depositMethod} as method of payment";
}
}

$depositMessage = new deposit(2000000, 400000 , 'Mobile Money');
// echo $depositMessage->check_deposits();