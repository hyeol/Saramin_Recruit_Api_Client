<?php

namespace Saramin\Parameters;

class Count implements ParametersInterface
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

    public function validate()
    {
        // is_integer
    }
}