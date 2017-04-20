<?php

namespace ArrangeCovariance\Tests\Domain\Model;

use ArrangeCovariance\Domain\Model\Currency;
use ArrangeCovariance\Tests\TestCase;
use ArrangeCovariance\Domain\Model\Money;

class MoneyTest extends TestCase
{
    private $sut;

    public function testProperCreation()
    {
        $this->getSut();
        $this->assertInstanceOf('ArrangeCovariance\Domain\Model\Money', $this->sut);
    }

    public function testNewMoneySetProperCurrency()
    {
        $this->getSut();

        $this->assertInstanceOf(Currency::class, $this->sut->getCurrency());

        $this->assertEquals('EUR', $this->sut->getCurrency());
    }

    public function testNewMoneySetProperAmount()
    {
        $this->getSut();

        $this->assertEquals(1000, $this->sut->getAmount());

        $this->expectException(\TypeError::class);

        $this->getSut('aaa');
    }

    public function testGetAsString()
    {
        $this->getSut();

        $this->assertEquals('1000 EUR', $this->sut->getAsString());
    }

    public function getSut($amount = 1000, $isoCode = 'EUR')
    {
        $this->sut = new Money($amount, new Currency($isoCode));
    }
}