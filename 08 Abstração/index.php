<?php

abstract class Bank
{
    protected $balance;
    protected $limitWithdrawal;
    protected $fees;

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    abstract protected function Withdraw($withdraw);
    abstract protected function Deposit($deposit);
}

class Itau extends Bank
{
    public function Withdraw($withdraw)
    {
        $this->setBalance($this->getBalance() - $withdraw);
    }

    public function Deposit($deposit)
    {
        $this->setBalance($this->getBalance() + $deposit);
    }
}

/*
class Bradesco extends Bank
{
    public function Withdraw()
    {
        return 'Withdraw';
    }

    public function Deposit()
    {
        return 'Deposit';
    }
}
*/

// $bank = new Bank();
$itau = new Itau();

$itau->setBalance(1000);
echo $itau->getBalance();
echo "\n";

$itau->Withdraw(250);
echo $itau->getBalance();
echo "\n";

$itau->Deposit(900);
echo $itau->getBalance();
echo "\n";
