<?php

namespace App\Service;

/**
 * Class WordCounterService
 * @package App\Service
 */
class WordCounterService
{
    /**
     * @param string $text
     * @param int $limit
     * @return array
     */
    public function count(string $text, int $limit)
    {
        $commonWords = [
            'the', 'be', 'to', 'of', 'and',
            'a', 'in', 'that', 'have', 'I',
            'it', 'for', 'not', 'on', 'with',
            'he', 'as', 'you', 'do', 'at',
            'this', 'but', 'his', 'by', 'from',
            'they', 'we', 'say', 'her', 'she',
            'or', 'an', 'will', 'my', 'one',
            'all', 'would', 'there', 'their', 'what',
            'so', 'up', 'out', 'if', 'about',
            'who', 'get', 'which', 'go', 'me',
        ];

        /** @var \SimpleXMLElement $rss */
        // Get word counts
        $words = array_count_values(str_word_count($text, 1));
        // Sort by value
        arsort($words);
        // Exclude most commonly used words
        $words = array_diff_key($words, array_flip($commonWords));
        // Return the x count of elements
        return array_slice($words, 0, $limit); ;
    }
}
