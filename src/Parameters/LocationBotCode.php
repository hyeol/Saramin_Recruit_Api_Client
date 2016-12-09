<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class LocationBotCode implements ParameterInterface
{
    private $locBcd = [];

    /**
     * LocationBotCode constructor.
     *
     * @param null $loc_bcd
     */
    public function __construct($loc_bcd = null)
    {
        $this->locBcd = is_numeric($loc_bcd) ? [$loc_bcd] : $loc_bcd;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'loc_bcd' => ['numeric'],
        ];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return ['loc_bcd' => impode(' ', $this->locBcd)];
    }
}
