<?php
namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser{


    public function successResponse($data, $code=Response::HTTP_OK){
     /**
     * Build Succes Response
     * @param string|array $data
     * @param int $code
     * @return Illuminate\Http\JsonResponse
     */
        return response($data, $code)->header('Content-Type', 'application/json');
    }

    public function errorResponse($message, $code){
    /**
     * Build error responses
     * @param  string|array $message
     * @param  int $code
     * @return Illuminate\Http\JsonResponse
     */
    return response()->json(['error' => $message, 'code' => $code], $code);

    }
}