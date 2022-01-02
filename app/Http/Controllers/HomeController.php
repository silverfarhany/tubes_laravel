<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    public function home()
    {       
        $person = Person::all();
        //('person')->select('id','name','email','roll','status')->get();

        return view('home')->with('person', $person);           
    }
   
    public function delete($id)
    {
        $post = Person::find($id);

        //$post->foreign('person_id')->references('id')->on('person');
        $post->delete();
        //return redirect('/home');
    
    }

   
}