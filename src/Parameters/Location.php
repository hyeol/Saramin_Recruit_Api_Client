<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class Location implements ParameterInterface
{
    private $loc_mcd = [];
    private $loc_bcd = [];
    private $loc_cd = [];

    /**
     * Location constructor.
     *
     * @param null $loc_mcd
     * @param null $loc_bcd
     * @param null $loc_cd
     */
    public function __construct($loc_mcd = null, $loc_bcd = null, $loc_cd = null)
    {
        $this->loc_mcd = $loc_mcd;
        $this->loc_bcd = $loc_bcd;
        $this->loc_cd = $loc_cd;
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
            'loc_mcd' => implode(' ', $this->loc_mcd),
            'loc_bcd' => implode(' ', $this->loc_bcd),
            'loc_cd'  => implode(' ', $this->loc_cd),
        ];
    }
}
