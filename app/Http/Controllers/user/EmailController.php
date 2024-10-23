<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function resend_email(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return response()->json([
            'status' => 'success',
            'message' => 'Email dikirim lagi -_-',
        ], 201);
    }
}
