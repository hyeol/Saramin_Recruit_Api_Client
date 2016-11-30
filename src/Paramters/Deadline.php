<?php

namespace Saramin\RecruitApiClient\Parameters;


use Saramin\RecruitApiClient\Contracts\ParameterInterface;

class Deadline implements ParameterInterface
{
    private $deadline = '';

    /**
     * Deadline constructor.
     *
     * @param string $deadline
     */
    public function __construct($deadline)
    {
        $this->deadline = $deadline;
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
