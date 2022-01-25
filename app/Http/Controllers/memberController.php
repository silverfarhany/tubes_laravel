<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class memberController extends BaseController
{
    public function index()
    {   
        if(Session::get('roll') == 2){
            return view('addMember');
        }elseif(Session::get('roll') == 1){
            return redirect('/dashboard');
        }else{
            return view('login');
        }
    }


    public function storeDataPost(Request $request){
        $validated = $request->validate([
            'fullname' => 'required|max:255',
            'email' => 'required|unique:person',
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
        return redirect('/home');
    }

    public function edit($id) {  
        $person = Person::findOrFail($id);        
        return view('editPerson',[
            'person' => $person,
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'fullname' => 'required',
            'email' => 'required',
            'roll' => 'required',
            'status' => 'required'                               
        ]);      

        $updatePerson = [
            'name' => $request->fullname,
            'roll' => $request->roll,
            'email' => $request->email,
            'status' => $request->status         
        ];

        Person::where('id',$request->id)->update($updatePerson);
        return redirect('/home');
    }

    public function delete($id)
    {
        Person::find($id)->delete();
        return redirect('/home');
    }
}