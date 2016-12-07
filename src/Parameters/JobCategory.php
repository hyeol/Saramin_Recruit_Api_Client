<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class JobCategory implements ParameterInterface
{
    private $job_category = [];

    /**
     * jobCategory constructor.
     *
     * @param $job_category
     */
    public function __construct($job_category)
    {
        if (!is_array($job_category)) {
            $this->job_category = [$job_category];
        } else {
            $this->job_category = $job_category;
        }
    }

    /**
     * @return array
     */
    public function rules()
    {
        return ['job_category' => ['numeric']];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return ['job_category' => implode(' ', $this->job_category)];
    }
}
