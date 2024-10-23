<?php

namespace App\Http\Controllers\home;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $user = Auth::user();
        // dd($user);
        toastr()->success('Task completed successfully.');
        return view('users.home_page');
    }
}
