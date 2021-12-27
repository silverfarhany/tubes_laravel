<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    public function getPerson(){
        return $this->belongsTo('App\Person', 'person_id', 'id');
        }
}
