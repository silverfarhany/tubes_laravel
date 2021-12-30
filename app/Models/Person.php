<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['id','name','email','roll','status'];
    protected $table = 'person';
    
    public function getAccount(){
        return $this->belongsTo(Account::class);
    }

    public function getScore(){
        return $this->belongsTo(Score::class);
    }
    
        
    
}


// ('App\Account', 'account_id', 'id');
