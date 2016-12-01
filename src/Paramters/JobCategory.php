<?php

namespace Saramin\RecruitApiClient\Parameters;

use Saramin\RecruitApiClient\Contracts\ParameterInterface;

class JobCategory implements ParameterInterface
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
