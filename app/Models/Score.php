<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = ['id','1task','2task','3task','4task','finaltask','finalscore'];
    protected $table = 'score';

    public function getPerson(){
        return $this->belongsTo(Person::class);
        // ('App\Person', 'person_id', 'id');
        }

}
