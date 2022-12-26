<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\AppsUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::guard('web')->check()) {
            return redirect()->route('apps.dashboard');
        } else {
            return view('login.login-form');
        }
    }

    public function processLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->guard('web')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            $user = auth()->guard('web')->user();
            // dd(auth()->guard('appUser')->user()->id);
            return redirect()->intended(url('/dashboard'));
        } else {
            return redirect()->back()->with('error', 'These credentials do not match our records.');
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('apps.login');
    }
}
