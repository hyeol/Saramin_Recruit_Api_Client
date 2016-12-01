<?php

namespace Saramin\RecruitApiClient\Parameters;

use Saramin\RecruitApiClient\Contracts\ParameterInterface;

class Keywords implements ParameterInterface
{
    private $keywords = '';

    /**
     * keywords constructor.
     *
     * @param $keywords
     */
    public function __construct($keywords)
    {
        $this->keywords = $keywords;
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