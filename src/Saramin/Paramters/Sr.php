<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016-11-30
 * Time: ¿ÀÈÄ 1:24
 */

namespace Saramin\Parameters;


class Sr implements ParametersInterface
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