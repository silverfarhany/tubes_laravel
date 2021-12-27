<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class ScoreController extends Controller
{
    public function inputScore()
    {       
            return view('inputScore');
        }
    }