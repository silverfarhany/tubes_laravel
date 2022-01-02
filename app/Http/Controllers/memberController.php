<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class memberController extends BaseController
{
    public function index()
    {
       $person = Person::get();
        return view('addMember');
    }


    public function storeDataPost(Request $request){
        $validated = $request->validate([
            'fullname' => 'required|max:255',
            'email' => 'required|email:dns|unique:person',
            'startdate' => 'required|date'
        ]);

        $addPerson = new Person([
            'name' => $request->get('fullname'),
            'email' => $request->get('email'),
            'start' => $request->get('startdate'),
            'roll' => $request->get('roll'),  
            'status' => 1      
        ]);
       
        $addPerson->save();
    }

}