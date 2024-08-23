<?php
// class User{

// }
// class Book{

// }
// class Order{

// }
// class ReviewAndRetting{

// }
// class Payment{

// }

class Human{
    public $name;
    public $mobile_number;
    public $email;
    public function age($dob){
        echo "name: ".$this->name."<br>";
        echo "age: ".(date("Y")-$dob); 
    }


}
$firuz=new Human();
$firuz->name="Firuz";
$firuz->mobile_number="1234567890";
$firuz->email="2pLx1@example.com";
$firuz->age(1993);

class BankAccount
{
	public $accountNumber;
	public $balance;
	public function deposit($amount)
	{
		if ($amount > 0) {
			$this->balance += $amount;
		}
        return $this;
	}
	public function withdraw($amount)
	{
		if ($amount <= $this->balance) {
			$this->balance -= $amount;
			return true;
		}
                return false;
	}

}
$account=new BankAccount();
$account->deposit(1000)
        ->deposit(2000)
        ->deposit(3000);
