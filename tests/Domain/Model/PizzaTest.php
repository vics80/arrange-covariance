<?php

namespace ArrangeCovariance\Tests\Domain\Model;

use ArrangeCovariance\Domain\Model\Pizza;
use ArrangeCovariance\Tests\TestCase;

class PizzaTest extends TestCase
{
    public function testPropperCreation()
    {
        $sut = new Pizza();

        $this->assertInstanceOf('ArrangeCovariance\Domain\Model\Pizza', $sut);
    }
}