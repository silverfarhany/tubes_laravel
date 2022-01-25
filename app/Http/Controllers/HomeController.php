<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Score;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;



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
                'person' => $data_person,
                'score' => $data_score
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