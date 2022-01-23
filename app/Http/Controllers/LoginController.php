<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'See you soon !');
    }

    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        // validate the request
        $attributes = request()->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        // attempt to authenticate and log in the user
        if (auth()->attempt($attributes)) {

            // create new session
            session()->regenerate();

            // redirect to home page
            return redirect('/dashboard')->with('success', 'welcome back !');
        }

        // auth failed
        return back()
            ->withInput()
            ->withErrors(['password' => 'Password could not be verified']);
    }
}
