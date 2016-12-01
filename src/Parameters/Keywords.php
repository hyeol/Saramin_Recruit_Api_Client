<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

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
        return ['keywords' => ['string']];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return ['keywords' => $this->keywords];
    }
}
