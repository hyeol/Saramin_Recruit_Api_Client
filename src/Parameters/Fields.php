<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class Fields implements ParameterInterface
{
    private $fields = '';

    /**
     * fields constructor.
     *
     * @param string $fields
     */
    public function __construct($fields)
    {
        $this->fields = $fields;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'regex:^(posting-date|expiration-date|keyword-code|count)$'
        ];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return [
            'fields' => $this->fields
        ];
    }
}
