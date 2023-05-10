<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Register successfully');
    }

    public function login()
    {
        if(!empty(Auth::check()))
        {
            if(Auth::user()->user_type ==1)
            {
                return redirect('admin/dashboard');
            }
            else if(Auth::user()->user_type ==2)
            {
                return redirect('teacher/dashboard');
            }
            else if(Auth::user()->user_type ==3)
            {
                return redirect('student/dashboard');
            }
        }
        return view('auth.login');

    }

    public function AuthLogin(Request $request)
    {
        $remember = !empty ($request->remember) ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            if(Auth::user()->user_type ==1)
            {
                return redirect('admin/dashboard');
            }
            else if(Auth::user()->user_type ==2)
            {
                return redirect('teacher/dashboard');
            }
            else if(Auth::user()->user_type ==3)
            {
                return redirect('student/dashboard');
            }

        }
        else
        {
            return redirect ()->back()->with('error', 'Please input the correct email and password');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect(url(''));
    }
}
