<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phrase extends Model
{
    protected $fillable = [
        'text', 'image', 'author', 'category_id', 'user_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Votes()
    {
        return $this->hasMany(Vote::class);
    }


}
