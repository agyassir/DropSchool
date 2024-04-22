<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $fillable=['name','email','description','phone','adresse_id'];

    public function certificates(){
        return $this->hasMany(certificate::class,'provider');
    }
    public function administrator(){
        return $this->hasMany(Administration::class);
    }

    public function adresse(){
        return $this->belongsTo(Adresse::class);
    }

}
