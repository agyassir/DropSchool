<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $fillable=['user_id','subject_id','price'];
    public $timestamps = false;

    public function subject()  {
        return $this->belongsTo(Subject::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function emplois(){
        return $this->hasMany(Emploi::class);
    }

    public function enrolleds(){
        return $this->hasMany(class_enroled::class);
    }
}
