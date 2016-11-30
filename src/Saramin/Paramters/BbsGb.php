<?php

namespace Saramin\Parameters;

class BbsGb implements ParametersInterface
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

    public function validate()
    {
        // is_integer
    }
}