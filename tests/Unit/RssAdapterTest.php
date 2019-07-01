<?php

namespace Tests\Unit;

use App\Adapter\TheRegisterRssAdapter;
use Tests\TestCase;

class RssAdapterTest extends TestCase
{
    /**
     * @throws \App\Exceptions\InvalidRssException
     */
    public function testGetText()
    {
        $rss = simplexml_load_file(__DIR__ . '/../Storage/rss_feed.rss');

        $adapter = new TheRegisterRssAdapter();
        $result = $adapter->getText($rss);

        $expectedResult = "A Register reader turns the computer room into a socialist paradise Terminate and do what? Who, me?Â  Monday is here, and with it comes another tale of student hijinks in the computer room courtesy of our not-feeling-that-guilty Register readers in our weekly Who, Me? feature.â€¦Delphi RAD tool (remember that?) gets support for Linux desktop apps â€“ again Seventeen years after Kylix, Embarcardero adds a complete Linux toolchain to Delphi Hands OnÂ  Texas software house Embarcadero Technologies has said it will license FmxLinux for Delphi, allowing developers to compile desktop applications for 64-bit Linux.â€¦ ";

        $this->assertEquals($expectedResult, $result);
    }
}
