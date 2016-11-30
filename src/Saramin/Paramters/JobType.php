<?php

namespace Saramin\Parameters;

class JobType implements ParametersInterface
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

    public function validate()
    {
        // TODO: Implement validate() method.
    }
}