<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class class_enroled extends Model
{
    use HasFactory;

    protected $fillable=['classe_id','user_id'];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function classe(){
        return $this->belongsTo(Classe::class);
    }
}
