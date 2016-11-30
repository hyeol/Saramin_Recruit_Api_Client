<?php

namespace Saramin\RecruitApiClient\Parameters;

use Saramin\RecruitApiClient\Contracts\ParameterInterface;

class Location implements ParameterInterface
{
    private $loc_cd = 0;
    private $loc_mcd = 0;
    private $loc_bcd = 0;

    /**
     * Location constructor.
     * @param $location
     */
    public function __construct($location)
    {
        $this->location = $location;
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