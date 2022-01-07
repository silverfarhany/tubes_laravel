<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|email:dns|exists:Account,email',
            'password' => 'required',
        ]);
        if (auth()->attempt($login)) {
            dd('ok');
            //$request->session()->regenerate();

            //return redirect()->intended('/home');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}