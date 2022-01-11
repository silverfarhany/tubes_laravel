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
        if(Session::get('roll') == 2){
            $persons = Person::all();
            return view('inputScore', compact('persons'));
        }elseif(Session::get('roll') == 1){
            return redirect('/dashboard');
        }else{
            return view('login');
        }
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
        return redirect('/showScore');

        }
    
    public function showScore(Request $request)
    {
        if(Session::get('roll') == 2){
            $score = Score::all();
            $person = Person::select('id','name')->get();
            return view('showScore',[
                'score' => $score,
                'person' => $person,
            ]);
        }elseif(Session::get('roll') == 1){
            return redirect('/dashboard');
        }else{
            return view('login');
        }
    }

    public function delete(Request $request, $id)
    {
        Score::find($id)->delete();
        return redirect('/showScore');
    }
    
    public function edit($id) {
            
        $score = Score::findOrFail($id);
        $person = Person::select('name')->findOrFail($score->person_id);
        return view('editScore',[
            'score' => $score,
            'nama' => $person->name,
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
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

        $updateScore = [
            'week1' => $task1,
            'week2' => $task2,
            'week3' => $task3,
            'week4' => $task4,
            'finaltask' => $request->finaltask,
            'finalscore' => $finalscore
        ];
        Score::where('id',$request->id)->update($updateScore);
        return redirect('/showScore');
    }
}    