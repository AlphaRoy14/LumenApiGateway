<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\CommentService;

class CommentController extends Controller
{

    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }


    /**
     * Return the list of comments
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successResponse($this->commentService->obtainComments());

    }

    /**
     * Obtains and show one comment
     * @return Illuminate\Http\Response
     */
    public function show($comment)
    {
        return $this->successResponse($this->commentService->obtainComment($comment));

    }

    //
}
