<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function getAccount(){
        return $this->belongsTo('App\Account', 'account_id', 'id');
    }

    public function getScore(){
        return $this->belongsTo('App\Score', 'score_id', 'id');
    }
    
    static public function create(){

    }
}

