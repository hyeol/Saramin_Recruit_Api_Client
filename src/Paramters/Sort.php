<?php

namespace Saramin\RecruitApiClient\Parameters;

use Saramin\RecruitApiClient\Contracts\ParameterInterface;

class Sort implements ParameterInterface
{
    private $sort = '';

    /**
     * Sort constructor.
     *
     * @param string $sort
     */
    public function __construct($sort)
    {
        $this->sort = $sort;
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
