<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    use HasFactory;

    protected $fillable=['city','country','local'];

    public function schools(){
        return $this->hasMany(School::class);
    }
}
