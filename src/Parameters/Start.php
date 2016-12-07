<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class Start implements ParameterInterface
{
    private $start = 0;

    /**
     * Start constructor.
     *
     * @param int $start
     */
    public function __construct($start)
    {
        $this->start = $start;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'start' => ['numeric']
        ];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return [
            'start' => $this->start
        ];
    }
}
