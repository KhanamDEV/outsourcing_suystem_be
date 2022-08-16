<?php
/**
 * Created by cuongnd
 */

namespace App\Helpers;

use Illuminate\Support\Facades\Notification;

class ResponseHelpers
{

    public static function showResponse($data = [], $format = 'json', $message = null)
    {
        $response = [
            "meta" => [
                'status' => 200,
                'message' => !empty($message) ? $message : __('api::messages.response.success')
            ],
            'response' => !empty($data) ? $data : (object)[]
        ];

        if ($format == 'json') {
            return response()->json($response, $response['meta']['status']);
        } else {
            return $response;
        }
    }

    public static function notFoundResponse($message = null, $format = 'json')
    {
        $response = [
            "meta" => [
                'status' => 404,
                'message' => !empty($message) ? $message : __('api::messages.response.resource_not_found')
            ],
            'response' => (object)[]
        ];

        if ($format == 'json') {
            return response()->json($response, $response['meta']['status']);
        } else {
            return $response;
        }
    }

    public static function serverErrorResponse($data = [], $format = 'json', $message = null)
    {
        $response = [
            "meta" => [
                'status' => 500,
                'message' => !empty($message) ? $message : __('api::messages.response.internal_server_error')
            ],
            'response' => !empty($data) ? $data : (!$data ? $data : null)
        ];

        if ($format == 'json') {
            return response()->json($response, $response['meta']['status']);
        } else {
            return $response;
        }
    }

    public static function authenticateErrorResponse($message = null, $format = 'json')
    {

        $response = [
            "meta" => [
                'status' => 401,
                'message' => !empty($message) ? $message : __('api::messages.response.unauthenticated_error')
            ],
            'response' => (object)[]
        ];

        if ($format == 'json') {
            return response()->json($response, $response['meta']['status']);
        } else {
            return $response;
        }
    }

    public static function permissionErrorResponse($message = null, $format = 'json')
    {
        $response = [
            "meta" => [
                'status' => 403,
                'message' => !empty($message) ? $message : __('api::messages.response.execute_access_forbidden')
            ],
            'response' => (object)[]
        ];

        if ($format == 'json') {
            return response()->json($response, $response['meta']['status']);
        } else {
            return $response;
        }
    }

    public static function clientBEErrorResponse($message, $format = 'json')
    {
        $response = [
            "meta" => [
                'status' => 422,
                'message' => !empty($message) ? $message : __('api::messages.response.unprocessable_entity')
            ],
            'response' => (object)[]
        ];

        if ($format == 'json') {
            return response()->json($response, $response['meta']['status']);
        } else {
            return $response;
        }
    }



}
