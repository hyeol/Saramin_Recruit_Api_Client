<?php

namespace Saramin\RecruitApiClient\Parameters;

use Saramin\RecruitApiClient\Contracts\ParameterInterface;

class PublishDate implements ParameterInterface
{
    private $published = '';
    private $published_min = '';
    private $published_max = '';

    /**
     * PublishDate constructor.
     *
     * @param string $published
     */
    public function __construct($published)
    {
        $this->published = $published;
    }

    /**
     * @return array
     */
    public function rules()
    {
        // TODO: Implement validate() method.
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        // TODO: Implement getQueryArray() method.
    }
}
