<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016-11-30
 * Time: ¿ÀÈÄ 1:35
 */

namespace Saramin\Parameters;


class Deadline implements ParametersInterface
{
    private $deadline = '';

    /**
     * Deadline constructor.
     *
     * @param string $deadline
     */
    public function __construct($deadline)
    {
        $this->deadline = $deadline;
    }

    public function validate()
    {
        // TODO: Implement validate() method.
    }
}
