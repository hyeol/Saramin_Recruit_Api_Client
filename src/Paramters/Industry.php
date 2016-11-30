<?php

namespace Saramin\RecruitApiClient\Parameters;


use Saramin\RecruitApiClient\Contracts\ParameterInterface;

class Industry implements ParameterInterface
{
    private $ind_cd = '';

    /**
     * industry constructor.
     *
     * @param string $ind_cd
     */
    public function __construct($ind_cd)
    {
        $this->ind_cd = $ind_cd;
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