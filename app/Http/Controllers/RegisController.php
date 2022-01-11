<?php

namespace App\Http\Controllers;

use Session;
use App\Models\User;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisController extends Controller
{
    public function regis()
    {
        if (Session::get('roll') == 2) {
            return redirect('home');
        }elseif(Session::get('roll') == 1){
            return redirect('/dashboard');
        }else{
            return view('regis');
        }
    }

    public function actionregis(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|max:255|exists:Person,name',
            'email' => 'required|email:dns|exists:Person,email',
            'password' => 'required|min:8',
            'cpassword' => 'required|min:8'
        ]);
        $person_id = Person::where('email',$request->email)->select('id')->first();
        $data = new User([
            'person_id' => $person_id->id,
            'email' => $request->get('email'),
            'password' => hash::make($request->get('password'))        
        ]);
        $data->save();
        return back()->with('loginRegister','Register Succes! You can LogIn Now');
    }
}