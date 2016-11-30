<?php

namespace Saramin;

use Saramin\Parameters\ParametersInterface;

class Parameters
{
    private $parameters = [];

    public function push(ParametersInterface $parameters)
    {
        array_push($this->parameters, $parameters);
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }
}