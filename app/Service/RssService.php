<?php

namespace App\Service;

use App\Interfaces\RssAdapterInterface;

/**
 * Class RssService
 * @package App\Service
 */
class RssService
{
    /**
     * Extracts raw text from RSS feed
     *
     * @param string $url
     * @param RssAdapterInterface $adapter
     * @return mixed
     */
    public function getText(string $url, RssAdapterInterface $adapter): string
    {
        $text = simplexml_load_file($url);
        return $adapter->getText($text);
    }
}
