<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016-11-30
 * Time: ¿ÀÈÄ 1:30
 */

namespace Saramin\Parameters;


class fields implements ParametersInterface
{
    private $fields = '';

    /**
     * fields constructor.
     *
     * @param string $fields
     */
    public function __construct($fields)
    {
        $this->fields = $fields;
    }

    public function validate()
    {
        // TODO: Implement validate() method.
    }
}