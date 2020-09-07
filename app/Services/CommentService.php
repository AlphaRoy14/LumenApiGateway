<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class CommentService
{
    use ConsumesExternalService;

    /**
     * The base uri to consume the comments service
     * @var string
     */
    public $baseUri;


    public function __construct()
    {
        $this->baseUri = config('services.comments.base_uri');
    }

    /**
     * Obtain the full list of comments from the comment service
     * @return string
     */
    public function obtainComments()
    {
        return $this->performRequest('GET', '/comments');
    }

    /**
     * Obtain one single comment from the comment service
     * @return string
     */
    public function obtainComment($comment)
    {
        return $this->performRequest('GET', "/comments/{$comment}");
    }
}
