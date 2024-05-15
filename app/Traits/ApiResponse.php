<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponse
{
    /**
     * for return success response
     * @param null $data
     * @param int $status
     * @param null $message
     * @param null $meta
     * @return JsonResponse
     */
    public function successResponse($data = null, int $status = 200, $message = null , $meta = null): JsonResponse
    {
        return response()->json([
            'status' => true,
            "data" => $data,
            "message" => $message,
            "meta" => $meta,
        ], $status);
    }

    /**
     * for return error response
     * @param null $message
     * @param int $status
     * @param null $data
     * @param null $meta
     * @return JsonResponse
     */
    public function errorResponse($message = null, int $status = 400, $data = null , $meta = null): JsonResponse
    {
        return response()->json([
            'status' => false,
            "data" => $data,
            "message" => $message,
            "meta" => $meta,
        ], $status);
    }
}
