<?php

namespace Saramin\Parameters;

class PublishDate implements ParametersInterface
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

    public function validate()
    {
        // TODO: Implement validate() method.
    }
}