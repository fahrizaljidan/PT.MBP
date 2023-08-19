<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index() {
        return view('pages.login.index');
    }

    public function authenticate(Request $request): RedirectResponse {
        $credentials = $request->validate([
            'id_pegawai' => ['required', 'string'],
            'password'   => ['required', 'string'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }

        return back()->withErrors([
            'credentialError' => 'ID Pegawai atau kata sandi salah.',
        ]);
        // dd("hello");
    }

    public function logout(Request $request): RedirectResponse {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
