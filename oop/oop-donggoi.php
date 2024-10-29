<?php 
echo "<h1>Ví dụ về OOP - đóng gói </h1>";

class BankAccount
{
  private $balance = 0;
  public function deposit($amount)
  {
    $this->balance += $amount;
  }
  public function getBalance()
  {
    return  $this->balance;
  }
}
$account = new BankAccount();
$account->deposit(1200);
$account->deposit(1200);
echo $account->getBalance();
?>