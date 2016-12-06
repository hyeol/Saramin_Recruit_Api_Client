<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class Stock implements ParameterInterface
{
    private $stock = [];

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
        return [
            'stock' => [
                'in' => ['kospi', 'kosdaq'],
            ],
        ];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return ['stock' => implode(' ', $this->stock)];
    }
}
