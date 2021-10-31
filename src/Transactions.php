<?php
declare(strict_types=1);
class Transaction{
    public float $amount;
    public string $description;
    
    public function __construct(float $amount, string $description)
    {
      $this->amount = $amount;
      $this->description = $description;
    }

    public function addTax(float $rate) {
      $this->amount += $this->amount * $rate / 100;
    }

    public function applyDiscount(float $discount){
      $this->amount -= $this->amount * $discount / 100;
    }

    public function getAmount(): float{
      return $this->amount;
    }

    public function getDescription(): string{
      return $this->description;
    }
}