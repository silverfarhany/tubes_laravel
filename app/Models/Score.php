<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = ['id','person_id','week1','week2','week3','week4','finaltask','finalscore'];
    protected $table = 'score';

    public function getPerson(){
        return $this->belongsTo(Person::class);
        
        }

}
