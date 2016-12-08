<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class LocationMidCode implements ParameterInterface
{
    private $locMcd = [];

    /**
     * LocationMidCode constructor.
     *
     * @param string $locMcd
     */
    public function __construct($locMcd)
    {
        $this->locMcd = is_numeric($locMcd) ? [$locMcd] : $locMcd;
    }


    /**
     * @return array
     */
    public function rules()
    {
        return [
            'loc_mcd' => ['numeric'],
        ];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return ['loc_mcd' => impode(' ', $this->locMcd)];
    }
}