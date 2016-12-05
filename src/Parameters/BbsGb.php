<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class BbsGb implements ParameterInterface
{
    private $bbs_gb = 0;

    /**
     * BbsGb constructor.
     *
     * @param int $bbs_gb
     */
    public function __construct($bbs_gb)
    {
        $this->bbs_gb = $bbs_gb;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return ['bbs_gb' => ['in:0,1']];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return ['bbs_gb' => $this->bbs_gb];
    }
}
