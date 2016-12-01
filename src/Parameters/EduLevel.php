<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

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
     * @return array
     */
    public function rules()
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
