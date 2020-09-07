<?php

namespace App\Http\Controllers;

use App\Tweet;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\TweetService;

class TweetController extends Controller
{
    use ApiResponser;

    public $tweetService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TweetService $tweetService)
    {
        $this->tweetService = $tweetService;
    }


    public function index()
    {
        return $this->successResponse($this->tweetService->obtainTweets());

    }

    public function store(Request $request)
    {
        // Nothin to store
    }

    /**
     * Obtains and show one tweet
     * @return Illuminate\Http\Response
     */
    public function show($tweet)
    {
        return $this->successResponse($this->tweetService->obtainTweet($tweet));

    }


    public function update(Request $request, $tweet)
    {
        // nothing to update
    }

    public function destroy($tweet)
    {
        // nothin to delete
    }
    public function alltweets(){
        // !USES TWITTER API
        return $this->successResponse($this->tweetService->obtainTweetsFromApi());
    }
}
