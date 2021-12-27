<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegisController;



class RegisController extends Controller
{
    public function regis()
    {
        if (Auth::check()) {
            return redirect('home');
        }else{
            return view('regis');
        }
    }

    public function actionregis(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('home');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/regis');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}