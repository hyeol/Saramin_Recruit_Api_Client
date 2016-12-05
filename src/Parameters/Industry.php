<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

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
     * @return array
     */
    public function rules()
    {
        return ['ind_cd' => ['numeric']];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return ['ind_cd' => $this->ind_cd];
    }
}
