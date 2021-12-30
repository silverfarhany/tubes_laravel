<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Person;
use App\Models\Score;

class ScoreController extends Controller
{
    public function Score()
    {
        $persons = Person::all();
        return view('inputScore', compact('persons'));
        }
    
    public function inputScore(Request $request)
    {
        $task1 = $request->firsttask;
        $task2 = $request->scndtask;
        $task3 = $request->thrdtask;
        $task4 = $request->frthtask;
        $finalscore = $task1+$task2+$task3+$task4;

        $validated = $request->validate([
            'fullname' => 'required|max:255|exists:Person,name',
            'firsttask' => 'required',
            'scndtask' => 'required',
            'thrdtask' => 'required',
            'frthtask' => 'required',           
            'finaltask' => 'required'           
        ]);
        
        $addScore = new Score([    
            'person_id' => $request->get('$person->id'),
            'week1' => $request->get('firsttask'),
            'week2' => $request->get('scndtask'),
            'week3' => $request->get('thrdtask'),
            'week4' => $request->get('frthtask'),
            'finaltask' => $request->get('finaltask'),
            'finalscore' => $request->get('$finalscore')
        ]);

        $addScore->save();

        }
    
}    