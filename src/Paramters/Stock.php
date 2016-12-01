<?php

namespace Saramin\RecruitApiClient\Parameters;

use Saramin\RecruitApiClient\Contracts\ParameterInterface;

class Stock implements ParameterInterface
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

    /**
     * @return array
     */
    public function rules()
    {
        // TODO: Implement validate() method.
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        // TODO: Implement getQueryArray() method.
    }
}