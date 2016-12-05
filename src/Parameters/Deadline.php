<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class Deadline implements ParameterInterface
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

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'regex:^(today|tomorrow|-|\w{4}-\w{2}-\w{2} \w{2}:\w{2}:\w{2}|\d+)$'
        ];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return [
            'deadline' => $this->deadline
        ];
    }
}
