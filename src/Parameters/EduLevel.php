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
        return [
            'min:0',
            'max:9'
        ];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return [
            'edu_lv' => $this->edu_lv
        ];
    }
}
