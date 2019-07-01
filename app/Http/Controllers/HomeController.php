<?php

namespace App\Http\Controllers;

use App\Adapter\TheRegisterRssAdapter;
use App\Service\RssService;
use App\Service\WordCounterService;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Displays Rss word count for first page
     *
     * @param RssService $rssService
     * @param WordCounterService $wordCounterService
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(RssService $rssService, WordCounterService $wordCounterService)
    {
        $text = $rssService->getText('https://www.theregister.co.uk/software/headlines.atom', new TheRegisterRssAdapter());

        $wordCounts = $wordCounterService->count($text, 10);

        return view('home', ['words' => $wordCounts]);
    }
}
