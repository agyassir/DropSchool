<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursePurchased extends Model
{
    use HasFactory;

    protected $table="course_purchased";

    public function course()  {
        return $this->belongsTo(Cours::class,'course');
    }

    public function User()  {
        return $this->belongsTo(User::class,'student');
    }
}
