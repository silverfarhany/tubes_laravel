<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Score;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    public function home()
    {
        if(Session::get('roll') == 2){
            $person = Person::all();
            return view('home')->with('person', $person);
        }elseif(Session::get('roll') == 1){
            return redirect('/dashboard');
        }else{
            return view('login');
        }
    }
    public function studentHome()
    {
        if(Session::get('roll') != 2){
            $data_person = Person::where('id',Session::get('id'))->first();
            $data_score = Score::where('person_id',Session::get('id'))->first();
            return view('sertif',[
                'nama' => $data_person->name,
            ]);
            # return..
        }elseif(Session::get('roll') != 1){
            return redirect('home');
        }else{
            return view('login');
        }
        # code
    }
}