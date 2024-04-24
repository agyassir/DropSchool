<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Date extends Model
{
    use HasFactory;
    protected $table="date";
    public function emplois() : HasMany {
        return $this->hasMany(Emploi::class);
    }
}
