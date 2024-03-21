<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request )
    {


    // }
        try {
            //code...
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials, $request->filled('remember'))) {
                // Authentication passed...
                // return redirect()->intended('/dashboard');
                return view('admin.welcome');
            }

            return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
                'email' => 'These credentials do not match our records.',
            ]);


        } catch (\Throwable $th) {
            // dd($th);
        }

    }

    public function login()
    {
        return view('admin.auth.login');
    }

}

