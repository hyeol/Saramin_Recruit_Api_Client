<?php

namespace Saramin\RecruitApiClient\Contracts;


interface ParameterInterface
{
    /**
     * @return bool
     */
    public function validate();

    /**
     * @return array
     */
    public function getQueryArray();
}