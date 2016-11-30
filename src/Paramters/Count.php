<?php

namespace Saramin\RecruitApiClient\Parameters;

use Saramin\RecruitApiClient\Contracts\ParameterInterface;

class Count implements ParameterInterface
{
    private $count = 0;

    /**
     * Count constructor.
     *
     * @param int $count
     */
    public function __construct($count)
    {
        $this->count = $count;
    }

    /**
     * @return bool
     */
    public function validate()
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