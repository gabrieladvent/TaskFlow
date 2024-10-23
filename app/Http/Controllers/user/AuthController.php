<?php

namespace App\Http\Controllers\user;

use App\Models\User;
use Illuminate\Http\Request;
use App\Helpers\ResponsHelper;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }


    public function register_user(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => 'required|string|email:rfc,dns|max:250|unique:users,email',
            'password' => 'required|string|min:8',
            'password_confirmation' => 'required|same:password',
            'name' => 'required|string|max:250'
        ]);

        if ($validate->fails()) {
            return ResponsHelper::error('Validation Error!', $validate->errors(), 400);
        }

        $dataUser = [
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => $request->name
        ];

        $Insert = $this->user->insertData($dataUser);
        if (!$Insert) {
            throw new \Exception('Failed to insert user data.');
        }

        $data['token'] = $Insert->createToken($request->email)->plainTextToken;
        $data['user'] = $Insert;
        $data['Pesan'] = 'Verifikasi dulu bos';

        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(5),
            ['id' => $Insert->id, 'hash' => sha1($Insert->email)]
        );

        Mail::send('emails.verify', [
            'user' => $Insert->name,
            'verificationUrl' => $verificationUrl
        ], function ($message) use ($Insert) {
            $message->to($Insert->email);
            $message->subject('Email Verification');
        });

        $login = Auth::login($Insert);
        if ($login) {
            $data['token'] = $Insert->createToken($request->email)->plainTextToken;
        }

        return ResponsHelper::success('User is created successfully', $data, 201);
    }

    public function login_user(Request $request)
    {
        // Validasi input menggunakan validate method
        $validated = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        // Mencari user berdasarkan email
        $user = $this->user->getDataByEmail($request->email);

        // Memeriksa apakah user ada dan password sesuai
        if (!$user || !Hash::check($request->password, $user->password)) {
            return ResponsHelper::error('Login failed! Invalid credentials.', [], 401);
        }

        // Membuat token jika login berhasil
        $data['token'] = $user->createToken($request->email)->plainTextToken;
        $data['user'] = $user;

        // Melakukan login dengan Auth
        Auth::login($user);

        // Menampilkan pesan sukses
        toastr()->success('Login berhasil.');

        // Redirect ke halaman home
        return redirect()->route('home');
    }

    public function logout(Request $request)
    {
        try {
            if (Auth::user()) {
                $request->user()->tokens()->delete();
                Auth::logout();
            }

            toastr()->success('Task completed successfully.');
            return redirect()->route('login');
        } catch (\Exception $e) {
            Log::error('Logout error: ' . $e->getMessage());

            toastr()->success('Task completed successfully.');
            return redirect()->route('login');
        }
    }
}
