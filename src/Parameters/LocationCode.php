<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class LocationCode implements ParameterInterface
{
    private $locCd = [];

    /**
     * LocationCode constructor.
     *
     * @param string $locCd
     */
    public function __construct($locCd)
    {
        $this->locCd = is_numeric($locCd) ? [$locCd] : $locCd;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'loc_cd' => ['numeric'],
        ];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return ['loc_cd' => impode(' ', $this->locCd)];
    }
}
