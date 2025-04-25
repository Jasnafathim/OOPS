<?php
class BankAccount {
    
    public $accountNumber;
    public $balance;
    public $ownerName;
    
    public function __construct($accountNumber, $ownerName, $balance = 0) {
        $this->accountNumber = $accountNumber;
        $this->ownerName = $ownerName;
        $this->balance = $balance;
    }
    
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            return true;
        }
        return false;
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance)
        {
            $this->balance =$this->balance- $amount; 
            return true;
        }
        return false;
    }
   
    public function checkBalance(){
        return $this->balance;
    }
    
    public function getAccountDetails() {
        return "Account Number: " . $this->accountNumber . ", Owner Name: " . $this->ownerName . ", Balance: " . $this->balance;
    }
}

$account = new BankAccount("24681379", "Jasna", 1000);
echo $account->getAccountDetails() . "<br/>";

if ($account->deposit(500)) {
    echo "Deposit successful.<br/>";
} else {
    echo "Deposit failed.<br/>";
}

if ($account->withdraw(2500)) {
    echo "Withdrawal successful.<br/>";
} else {
    echo "Withdrawal failed.<br/>";
}

echo "Current balance: " . $account->checkBalance() . "<br/>";
?>
