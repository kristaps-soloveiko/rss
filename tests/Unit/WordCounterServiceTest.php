<?php

namespace Tests\Unit;

use App\Service\WordCounterService;
use Tests\TestCase;

class WordCounterServiceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCount()
    {
        $text = "this this is is is a a a a random random random random random word word word word word word word word";
        $service = new WordCounterService();
        $result = $service->count($text, 3);

        $expectedResult = [
            'word' => 8,
            'random' => 5,
            'is' => 3,
        ];
        $this->assertEquals($expectedResult, $result);
    }
}
