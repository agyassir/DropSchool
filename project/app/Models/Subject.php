<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

    use HasFactory;

    protected $fillable=['name','niveau'];

    public function level(){
        return $this->belongsTo(Level::class,'niveau');
    }

    public function classes(){
        return $this->hasMany(Classe::class);
    }

    public function courses(){
        return $this->hasMany(Course::class);
    }
}
