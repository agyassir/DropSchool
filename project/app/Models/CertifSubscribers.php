<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertifSubscribers extends Model
{
    use HasFactory;

    public function certificate(){
        return $this->belongsTo(certificate::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
