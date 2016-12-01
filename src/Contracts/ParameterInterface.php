<?php

namespace Saramin\RecruitApi\Contracts;

interface ParameterInterface
{
    /**
     * @return array
     */
    public function rules();

    /**
     * @return array
     */
    public function getQueryArray();
}
