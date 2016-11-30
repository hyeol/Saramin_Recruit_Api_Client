<?php

namespace Saramin\Parameters;

class keywords implements ParametersInterface
{
    private $keywords = '';

    /**
     * keywords constructor.
     *
     * @param $keywords
     */
    public function __construct($keywords)
    {
        $this->keywords = $keywords;
    }

    public function validate()
    {

    }
}