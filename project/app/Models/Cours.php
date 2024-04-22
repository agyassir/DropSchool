<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;

    protected $fillable=['title','description','categorie','price','prof'];

    public function abs(){
        return $this->belongsTo(User::class,'prof','id');
    }

    public function purchased()  {
        return $this->hasMany(CoursePurchased::class,'course');
    }
}
