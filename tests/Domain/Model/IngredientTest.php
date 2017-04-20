<?php

namespace ArrangeCovariance\Tests\Domain\Model;

use ArrangeCovariance\Domain\Model\Ingredient;
use ArrangeCovariance\Tests\TestCase;

class IngredientTest extends TestCase
{
    public function testProperCreation()
    {
        $sut = new Ingredient();
        $this->assertInstanceOf('ArrangeCovariance\Domain\Model\Ingredient', $sut);
    }
}