<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => "required",
            'password' => "required",
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/dashboard');
        } else {
            return redirect()->back()->withErrors(['username' => 'Invalid username or password']);
        }
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    // change_password method
    public function changePassword(Request $request)
    {
        $request->validate([
            'c_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = Auth::user();

        if (password_verify($request->c_password, $user->password)) {
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect()->back()->with('success', 'Password changed successfully');
        } else {
            return redirect()->back()->withErrors(['c_password' => 'Old password is incorrect']);
        }
    }
}
