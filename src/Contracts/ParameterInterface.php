<?php

namespace Saramin\RecruitApiClient\Contracts;


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