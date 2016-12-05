<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class JobType implements ParameterInterface
{
    private $job_type = '';

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
        // TODO: Implement validate() method.
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return [
            'job_type' => $this->job_type
        ];
    }
}
