<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016-11-30
 * Time: ¿ÀÈÄ 1:30
 */

namespace Saramin\Parameters;


class EduLevel implements ParametersInterface
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

    public function validate()
    {
        // TODO: Implement validate() method.
    }
}