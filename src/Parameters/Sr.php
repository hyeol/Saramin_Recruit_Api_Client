<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class Sr implements ParameterInterface
{
    private $sr = [];


    public function __construct($sr)
    {
        $this->sr = $sr;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return ['sr' => 'in:directhire,exjc'];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return ['sr' => join(' ', $this->sr)];
    }
}
