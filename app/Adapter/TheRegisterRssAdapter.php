<?php

namespace App\Adapter;

use App\Exceptions\InvalidRssException;
use App\Interfaces\RssAdapterInterface;
use App\VO\TheRegisterRssVO;

/**
 * Class TheRegisterRssAdapter
 * @package App\Adapter
 */
class TheRegisterRssAdapter implements RssAdapterInterface
{
    /**
     * @param \SimpleXMLElement $rss
     * @return mixed|string
     * @throws InvalidRssException
     */
    public function getText(\SimpleXMLElement $rss): string
    {
        if (isset($rss->entry) === false) {
            throw new InvalidRssException();
        }

        $text = '';
        foreach ($rss->entry as $item) {
            $valueObject = new TheRegisterRssVO($item);
            // We dont need the text in any specific format. Returning minimum complexity
            $text .= "{$valueObject->getTitle()} {$valueObject->getSummary()}";
        }

        return $text;
    }
}
