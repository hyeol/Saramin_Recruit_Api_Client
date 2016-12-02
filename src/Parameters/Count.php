<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class Count implements ParameterInterface
{
    private $count = 0;

    /**
     * Count constructor.
     *
     * @param int $count
     */
    public function __construct($count)
    {
        $this->count = $count;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return ['count' => [
            'numeric',
            'max:110'
        ]];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return ['count' => $this->count];
    }
}
