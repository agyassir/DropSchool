<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Firstname',
        'lastname',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function courses(){
        return $this->hasMany(Cours::class);
    }

    public function classes(){
        return $this->hasMany(Classe::class);
    }

    public function rol(){
        return $this->belongsTo(Role::class,'role');
    }


    public function uenrolleds(){
        return $this->hasMany(class_enroled::class);
    }

    public function Purchase() : HasMany {
        return $this->hasMany(CoursePurchased::class,'student','id');
    }

    public function administrator(){
        return $this->hasMany(Administration::class);
    }

    public function certif(){
        return $this->hasMany(CertifSubscribers::class);
    }

}
