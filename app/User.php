<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','companyTitle','slogan','companyDescription','payment','logoDiscription','logoLook','primaryColor','secondaryColor','background','audience','logoExample','competitor','instagram','idService','agreement','cashapp','paymentStatus','password','products','paymentType'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function service() {
        return $this->belongsTo(Service::class, 'idService', 'idService');
    }
}
