<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class memberController extends BaseController
{
    public function index()
    {
       return view('addMember');
    }

    public function storeDataPost(Request $request){
        $validated = $request->validate([
            'fullname' => 'required|max:255',
            'email' => 'required|email:dns',
            'startdate' => 'required|date'
        ]);
        Person::create($validated);
    }
}