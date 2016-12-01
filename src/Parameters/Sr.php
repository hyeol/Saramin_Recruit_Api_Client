<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class Sr implements ParameterInterface
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
