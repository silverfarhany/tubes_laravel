<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    public function home()
    {       
        $person = DB::table('person')->select('id','name','email','roll','status')->get();

        return view('home')->with('person', $person);   
        
    }
   

   
}