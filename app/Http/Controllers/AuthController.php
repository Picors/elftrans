<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\HomePage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    // Tampilkan form login
    public function showLoginForm()
    {
        $konten = HomePage::first();

        return view('auth.login', compact('konten'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin/dashboard')
                ->with('success', 'Signed in');
        }

        // Menggunakan session untuk mengirimkan pesan error
        return redirect()->back()->with('error', 'Username atau Password salah.');
    }




    // Logout pengguna
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    // Tampilkan form lupa password
    public function showForgotPasswordForm()
    {
        $konten = HomePage::first();

        return view('auth.forgot-password', compact('konten'));
    }

    // Kirim link reset password
    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function showResetPasswordForm($token)
    {
        $konten = HomePage::first();
        return view('auth.reset-password', ['token' => $token], compact('konten'));
    }

    // Proses reset password
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:8|confirmed',
            'token' => 'required',
        ]);

        // Reset password dengan menggunakan mekanisme bawaan Laravel
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                // Password akan di-hash secara otomatis oleh setter di model User
                $user->forceFill([
                    'password' => $password,
                ])->save();

                $user->setRememberToken(Str::random(60));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
