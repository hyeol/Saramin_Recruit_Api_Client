<?php

namespace Saramin\RecruitApiClient\Parameters;


use Saramin\RecruitApiClient\Contracts\ParameterInterface;

class EduLevel implements ParameterInterface
{
    private $edu_lv = '';

    /**
     * EduLevel constructor.
     *
     * @param string $edu_lv
     */
    public function __construct($edu_lv)
    {
        $this->edu_lv = $edu_lv;
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