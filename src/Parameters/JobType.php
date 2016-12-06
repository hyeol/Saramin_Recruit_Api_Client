<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class JobType implements ParameterInterface
{
    private $job_type = [];

    /**
     * JobType constructor.
     *
     * @param string $job_type
     */
    public function __construct($job_type)
    {
        $this->job_type = $job_type;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return ['job_type' => [
            'min:1',
            'max:15',
        ]];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return ['job_type' => implode(' ', $this->job_type)];
    }
}
