<?php

namespace Saramin\Parameters;

class jobCategory implements ParametersInterface
{
    private $job_category = '';

    /**
     * jobCategory constructor.
     *
     * @param string $job_category
     */
    public function __construct($job_category)
    {
        $this->job_category = $job_category;
    }

    public function validate()
    {
        // TODO: Implement validate() method.
    }
}