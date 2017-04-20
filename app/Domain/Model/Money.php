<?php

namespace ArrangeCovariance\Domain\Model;

class Money
{

    private $currency;

    private $amount;

    public function __construct(float $amount, Currency $currency)
    {
        $this->setAmount($amount);

        $this->setCurrency($currency);
    }

    private function setCurrency(Currency $currency)
    {
        $this->currency = $currency;
    }

    private function setAmount(float $amount)
    {
        $this->amount = $amount;
    }

    public function getCurrency()
    {
        return new Currency('EUR');
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getAsString()
    {
        return $this->amount . ' ' . $this->currency;
    }
}