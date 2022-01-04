<?php
namespace App\Http\Controllers;
use App\Models\Score;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StudUpdateController extends Controller {

    
        public function index(){
            $users = DB::select('select * from score');
            return view('showScore');
        }
        public function show($id) {
            $users = DB::select('select * from score where id = ?',[$id]);
            return view('editScore');
        }
        public function update(Request $request, $id)
        {

            $score = Score::find($id);
            $score->name = $request->input('name');
            $firsttask = $request->input('firsttask');
            $scndtask = $request->input('scndtask');
            $thrdtask = $request->input('thrdtask');
            $frthtask = $request->input('frthtask');
            $finaltask = $request->input('finaltask');
        
            DB::update('update student set week1 = ?,week2=?,week3=?,week4 where id = ?',[$firsttask,$scndtask,$thrdtask,$frthtask,$finaltask,$id]);
            echo "Record updated successfully.";
            echo 'Click Here to go back.';
        }
}