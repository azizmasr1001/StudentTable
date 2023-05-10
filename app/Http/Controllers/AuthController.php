<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Mail\ForgotPasswordMail;
use Mail;
use Str;

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

    public function forgotpassword()
    {
        return view('auth.forgot');
    }

    public function PostForgotPassword(Request $request)
    {
        $user = User::getEmailSingle($request->email);
        if(!empty($user))
        {
            $user->remember_token = Str::random(30);
            $user->save();

            Mail::to($user->email)->send(new ForgotPasswordMail($user));

            return redirect()->back()->with('success', 'Please check Your email');

        }
        else
        {
            return redirect()->back()->with('error', 'Email Not Found');
        }
            /*dd($getEmailSingle);*/
    }
    public function reset($remember_token)
    {


        $user = User::getTokenSingle($remember_token);
        if(!empty($user))
        {
            $data['user'] = $user;
            return view('auth.reset', $data);
        }
        else
        {
            abort(404);
        }
    }

    public function PostReset($token, Request $request)
    {
        if($request->password == $request->cpassword)
        {
            $user = User::getTokenSingle($token);
            $user->password = Hash::make($request->password);
            $user->remember_token = Str::random(30);
            $user->save();

            return redirect(url(''))->with('success', 'Your password has been updated');
        }
        else
        {
            return redirect()->back()->with('error', 'Password and Confirm Password Does not Match');
        }
    }
    public function logout()
    {
        Auth::logout();

        return redirect(url(''));
    }
}
