<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016-11-30
 * Time: ¿ÀÈÄ 1:29
 */

namespace Saramin\Parameters;


class industry implements ParametersInterface
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

    public function validate()
    {
        // TODO: Implement validate() method.
    }
}