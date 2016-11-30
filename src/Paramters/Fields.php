<?php

namespace Saramin\RecruitApiClient\Parameters;


use Saramin\RecruitApiClient\Contracts\ParameterInterface;

class Fields implements ParameterInterface
{
    private $fields = '';

    /**
     * fields constructor.
     *
     * @param string $fields
     */
    public function __construct($fields)
    {
        $this->fields = $fields;
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