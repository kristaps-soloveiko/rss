<?php

namespace App\VO;

use App\Exceptions\InvalidRssException;

/**
 * Immutable final class TheRegisterRssVO.
 * @package App\VO
 */
final class TheRegisterRssVO
{
    /** @var string $title */
    private $title;

    /** @var string $summary */
    private $summary;

    /**
     * TheRegisterRssVO constructor.
     * @param \SimpleXMLElement $element
     * @throws InvalidRssException
     */
    public function __construct(\SimpleXMLElement $element)
    {
        if (
            isset($element->title) === false
            || isset($element->summary) === false

        ) {
            throw new InvalidRssException();
        }

        $this->title = strip_tags($element->title);
        $this->summary = strip_tags($element->summary);
    }

    /**
     * @return \SimpleXMLElement
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return \SimpleXMLElement
     */
    public function getSummary(): string
    {
        return $this->summary;
    }


}
