<?php

namespace Saramin\Parameters;

class Sort implements ParametersInterface
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

    public function validate()
    {
        // TODO: Implement validate() method.
    }
}