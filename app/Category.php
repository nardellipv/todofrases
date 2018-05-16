<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category', 'image',
    ];

    public function Phrases()
    {
        return $this->hasMany(Phrase::class);
    }
}
