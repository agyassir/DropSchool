<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable=['steps','certificate_id'];

    public function Certificate(){
        return $this->belongsTo(Certificate::class);
    }
}
