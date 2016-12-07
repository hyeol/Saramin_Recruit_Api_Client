<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class JobType implements ParameterInterface
{
    private $jobType = [];

    /**
     * JobType constructor.
     *
     * @param $jobType
     */
    public function __construct($jobType)
    {
        if (! is_array($jobType)) {
            $this->jobType = [$jobType];
        } else {
            $this->jobType = $jobType;
        }
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'job_type' => [
                'min:1',
                'max:15',
            ]
        ];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return [
            'job_type' => join(' ', $this->jobType)
        ];
    }
}
