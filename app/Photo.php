<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'name', 'image', 'status', 'user_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
