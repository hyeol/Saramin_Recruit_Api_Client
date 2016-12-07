<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class Location implements ParameterInterface
{
    private $locMcd = [];
    private $locBcd = [];
    private $locCd = [];

    /**
     * Location constructor.
     *
     * @param null $loc_mcd
     * @param null $loc_bcd
     * @param null $loc_cd
     */
    public function __construct($loc_mcd = null, $loc_bcd = null, $loc_cd = null)
    {
        $this->locMcd = $loc_mcd;
        $this->locBcd = $loc_bcd;
        $this->locCd  = $loc_cd;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'loc_mcd' => ['numeric'],
            'loc_bcd' => ['numeric'],
            'loc_cd'  => ['numeric'],
        ];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return [
            'loc_mcd' => join(' ', $this->locMcd),
            'loc_bcd' => join(' ', $this->locBcd),
            'loc_cd'  => join(' ', $this->locCd),
        ];
    }
}
