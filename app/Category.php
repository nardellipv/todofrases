<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /*protected $fillable = [

];*/

    public function Phrases()
    {
        return $this->hasMany(Phrase::class);
    }
}
