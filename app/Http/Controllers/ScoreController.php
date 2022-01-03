<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Score;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ScoreController extends Controller
{
    public function Score()
    {
        $persons = Person::all();
        return view('inputScore', compact('persons'));
        }
    
    public function inputScore(Request $request)
    {
        $request->validate([
            'firsttask' => 'required',
            'scndtask' => 'required',
            'thrdtask' => 'required',
            'frthtask' => 'required',           
            'finaltask' => 'required'           
        ]);

        $task1 = $request->firsttask;
        $task2 = $request->scndtask;
        $task3 = $request->thrdtask;
        $task4 = $request->frthtask;
        $finaltask = $request->finaltask;
        $finalscore = ($task1+$task2+$task3+$task4+$finaltask)/5;

        $addScore = new Score([    
            'person_id' => $request->id,
            'week1' => $task1,
            'week2' => $task2,
            'week3' => $task3,
            'week4' => $task4,
            'finaltask' => $request->finaltask,
            'finalscore' => $finalscore
        ]);

        $addScore->save();

        }
    
    public function showScore(Request $request)
    {
        $score = DB::table('score')->select('id','person_id','week1','week2','week3','week4','finaltask','finalscore')->get();

        return view('showScore')->with('score', $score);   
        
    }

    public function delete(Request $request, $id)
    {        
            DB::delete('delete from score where id = ?',[$id]);
            echo "Record deleted successfully.<br/>";
            echo '<a href = "/showScore">Click Here</a> to go back.';
    }
    
    public function edit($id)
    {
        $score = Score::find($id);
        return view('/editScore');
    }

    

}    