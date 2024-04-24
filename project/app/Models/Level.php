<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    public function Subject(){
        return $this->hasMany(Subject::class,'niveau');
    }

    public function branche()  {
        return $this->belongsTo(Branche::class,'branch');
    }
}
