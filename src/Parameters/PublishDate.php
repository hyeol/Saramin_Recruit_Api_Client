<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class PublishDate implements ParameterInterface
{
    private $published = '';
    private $published_min = '';
    private $published_max = '';

    /**
     * PublishDate constructor.
     *
     * @param string $published
     * @param null   $published_min
     * @param null   $published_max
     */
    public function __construct($published = null, $published_min = null, $published_max = null)
    {
        $this->published = $published;
        $this->published_min = $published_min;
        $this->published_max = $published_max;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'published'     => ['date'],
            'published_min' => ['datetime|timestamp'],
            'published_max' => ['datetime|timestamp'],
        ];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return [
            'published'     => $this->published,
            'published_min' => $this->published_min,
            'published_max' => $this->published_max,
        ];
    }
}
