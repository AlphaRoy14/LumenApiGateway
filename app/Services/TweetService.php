<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class TweetService
{
    use ConsumesExternalService;

    /**
     * The base uri to consume the tweets service
     * @var string
     */
    public $baseUri;

    /**
     * The secret to consume the tweets service
     * @var string
     */

    public function __construct()
    {
        $this->baseUri = config('services.tweets.base_uri');
    }

    /**
     * Obtain the full list of tweets from the tweet service
     * @return string
     */
    public function obtainTweets()
    {
        return $this->performRequest('GET', '/tweets');
    }


    /**
     * Obtain one single tweet from the tweet service
     * @return string
     */
    public function obtainTweet($tweet)
    {
        return $this->performRequest('GET', "/tweets/{$tweet}");
    }

    public function obtainTweetsFromApi()
    {
        return $this->performRequest('GET', '/alltweets');

    }

}
