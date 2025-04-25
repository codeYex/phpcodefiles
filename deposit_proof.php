//Inheritance
<?php
require_once 'deposit.php';
class deposit_proof extends deposit
{

    public $deposit_proof_message;

    public function __construct($deposits, $depositBalance, $deposit_proof_message, $depositMethod)
    {
        //call th parent class
        parent::__construct($deposits, $depositBalance, $depositMethod);
        $this->deposit_proof_message = $deposit_proof_message;
    }

    public function showMessage()
    {
        return "New balance is {$this->depositBalance} , and  deposit proof is {$this->deposit_proof_message}";
    }
}

$new_Message = new deposit_proof(40000, 3000000, 'You have deposited', 'Mobile Money');
echo $new_Message->showMessage();
