<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function login()
    {
        if (Session::get('roll') == 2){
            return redirect('home');
        }elseif(Session::get('roll') == 1){
            return redirect('/dashboard');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|email:dns|exists:Person,email',
            'password' => 'required',
        ]);
        if (Auth::attempt($login)) {
            $request->session()->regenerate();

            $session_id_roll = Person::where('email',$request->email)->select('roll','id')->first();
            $request->session()->put('roll', $session_id_roll->roll);
            $request->session()->put('id', $session_id_roll->id);

            if(Session::get('roll') == 2){
                return redirect()->intended('/home');
            }else{
                return redirect()->intended('/dashboard');
            }
        }
        return back()->with('loginRegister','Login Failed!');
    }

    public function actionlogout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}