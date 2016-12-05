<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class UpdateDate implements ParameterInterface
{
    private $updated;
    private $updated_min;
    private $updated_max;

    /**
     * UpdateDate constructor.
     *
     * @param null $updated
     * @param null $updated_min
     * @param null $updated_max
     */
    public function __construct($updated = null, $updated_min = null, $updated_max = null)
    {
        $this->updated     = $updated;
        $this->updated_min = $updated_min;
        $this->updated_max = $updated_max;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'updated'     => ['date'],
            'updated_min' => ['datetime|timestamp'],
            'updated_max' => ['datetime|timestamp'],
        ];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return [
            'updated'     => $this->updated ,
            'updated_min' => $this->updated_min,
            'updated_max' => $this->updated_max,
        ];
    }
}
