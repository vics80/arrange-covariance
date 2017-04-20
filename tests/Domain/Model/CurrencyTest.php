<?php

namespace ArrangeCovariance\Tests\Domain\Model;

use ArrangeCovariance\Tests\TestCase;
use ArrangeCovariance\Domain\Model\Currency;

class CurrencyTest extends TestCase
{
    public function testProperCreation()
    {
        $sut = new Currency('EUR');
        $this->assertInstanceOf('ArrangeCovariance\Domain\Model\Currency', $sut);
    }

    public function testGetIsoCodeMustReturnProperIsoCode()
    {
        $sut = new Currency('EUR');

        $this->assertEquals('EUR', $sut->getIsoCode());
    }

    public function testGetIsoCodeMustThorwInvalidArgumentExceptionWithInvalidIsoCode()
    {
        $this->expectException(\InvalidArgumentException::class);

        $sut = new Currency('123EUR');
    }

}