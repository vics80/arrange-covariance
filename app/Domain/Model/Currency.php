<?php

namespace ArrangeCovariance\Domain\Model;

class Currency
{
    private $isoCode;

    public function __construct($isoCode)
    {
        $this->setIsoCode($isoCode);
    }

    private function setIsoCode($isoCode)
    {
        if (!preg_match('/^[A-Z]{3}$/', $isoCode)) {

            throw new \InvalidArgumentException();

        }
        $this->isoCode = $isoCode;
    }

    public function getIsoCode()
    {
        return $this->isoCode;
    }

    public function __toString()
    {
        return $this->getIsoCode();
    }
}