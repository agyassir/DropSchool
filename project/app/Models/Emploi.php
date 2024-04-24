<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    use HasFactory;
protected $table="emploi";

protected $fillable=['begin','end','classe_id','date_id'];

    public function classe(){
        return $this->belongsTo(Classe::class);
    }

    public function date(){
        return $this->belongsTo(Date::class);
    }
}
