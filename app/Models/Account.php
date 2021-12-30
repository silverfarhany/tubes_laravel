<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['id','email','password'];
    protected $table = 'account';
    public $timestamps = false;
    public function getPerson(){
        return $this->belongsTo(Person::class);
        }
}
