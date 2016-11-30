<?php

namespace Saramin\Parameters;

class Location implements ParametersInterface
{
    private $loc_cd = 0;
    private $loc_mcd = 0;
    private $loc_bcd = 0;

    public function __construct($location)
    {
        $this->location = $location;
    }

    public function validate()
    {
        // is_string
    }
}