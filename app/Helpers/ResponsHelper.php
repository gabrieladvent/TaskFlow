<?php

namespace App\Helpers;

class ResponsHelper
{
    public static function success($message = 'Success', $data = [], $code = 200)
    {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ], $code);
    }

    public static function error($message = 'Error', $data = [], $code = 400)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'data' => $data
        ], $code);
    }

    public static function successRedirect($route, $message = 'Success', $data = [], $code = 200)
    {
        return redirect()->route($route)
            ->with('status', 'success')
            ->with('message', $message)
            ->with('data', $data)
            ->setStatusCode($code);
    }

    public static function errorRedirect($route, $message = 'Error', $data = [], $code = 400)
    {
        return redirect()->route($route)
            ->with('status', 'error')
            ->with('message', $message)
            ->with('data', $data)
            ->setStatusCode($code);
    }
}
