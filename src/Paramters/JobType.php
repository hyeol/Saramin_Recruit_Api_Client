<?php

namespace Saramin\RecruitApiClient\Parameters;

use Saramin\RecruitApiClient\Contracts\ParameterInterface;

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
        // TODO: Implement getQueryArray() method.
    }
}
