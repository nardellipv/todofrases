<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    public function Phrases()
    {
        return $this->hasMany(Phrase::class);
    }

    public function Photos()
    {
        return $this->hasMany(Photo::class);
    }

    protected $fillable = [
        'name', 'email', 'user', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
