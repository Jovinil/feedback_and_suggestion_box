<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            if(Auth::user()->role === 1)
            {
                return redirect()->route('dashboard', Auth::id());
            }else if(Auth::user()->role === 0)
            {
                return redirect()->route('dashboard', Auth::id());
            }
        }

        return redirect('/')->with('incorrect', 'Incorrect password or username');
    }

    public function register(Request $request)
    {
        $tableName = 'users';

        $validated = $request->validate([
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'role' => 'required',
            'username' => 'required|unique:' . $tableName . ',username',
            'password' => 'required|min:8'
        ]);

        User::create($validated);

        return redirect()->back()->with('success', 'Account successfully created.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/');
    }
}
