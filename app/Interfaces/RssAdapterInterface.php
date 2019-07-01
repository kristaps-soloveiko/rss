<?php

namespace App\Interfaces;

/**
 * Interface RssAdapterInterface
 * @package App\Interfaces
 */
interface RssAdapterInterface
{
    /**
     * Extracts raw text content for specific RSS feed
     *
     * @param \SimpleXMLElement $text
     * @return mixed
     */
    public function getText(\SimpleXMLElement $text);
}
