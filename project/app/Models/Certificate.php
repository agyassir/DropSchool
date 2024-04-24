<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class certificate extends Model
{
    use HasFactory;

    protected $fillable=['title',
    'description',
    'prix',
    'provider'];    

    public function school(){
        return $this->belongsTo(School::class,'provider');
    }

    public function details(){
        return $this->hasMany(Detail::class);
    }

    public function subscribers(){
        return $this->hasMany(CertifSubscribers::class);
    }
}
