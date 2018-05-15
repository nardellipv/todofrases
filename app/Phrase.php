<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phrase extends Model
{
    /*protected $fillable = [

    ];*/

    public function Users()
    {
        return $this->belongsTo(User::class);
    }

    public function Votes()
    {
        return $this->hasMany(Vote::class);
    }


}
