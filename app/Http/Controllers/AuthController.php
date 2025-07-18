<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
{
    return view('auth.login');
}
public function login(Request $request)
{
    $credentials = $request->validate([
        'name' => 'required',
        'password' => 'required',
    ]);
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        
        return redirect()->intended('/peserta')->with('success', 'Anda berhasil masuk.');
    }
    return back()->withErrors([
        'name' => 'Username atau password salah.',
    ]);
}
public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login')->with('success', 'Anda berhasil keluar.');
}}