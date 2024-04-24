<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable=['title','subject_id','pdf'];

    public function Subject(){
        return $this->belongsTo(Subject::class);
    }


}
