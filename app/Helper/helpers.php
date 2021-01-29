<?php

/* helper function to sent pretty response */

if (!function_exists('api_response')) {

    function api_response($status, $message, $data = null)
    {
        $response = [
            'status' => $status,
            'message' => $message,
            'data' => $data
        ];

        return response()->json($response);
    }

}