<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $validated = $request->validate([
            'fullname' => 'required|max:255|exists:Person,name',
            'email' => 'required|email:dns|exists:Person,email',
            'password' => 'required|min:8',
            'cpassword' => 'required|min:8'
        ]);
        $data = new Account([
            'email' => $request->get('email'),
            'password' => $request->get('password')            
        ]);
        $data->save();
        
    }
}