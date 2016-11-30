<?php

namespace Saramin\Parameters;

class Stock implements ParametersInterface
{
    private $stock = '';

    /**
     * Stock constructor.
     *
     * @param string $stock
     */
    public function __construct($stock)
    {
        $this->stock = $stock;
    }

    public function validate()
    {
    }
}