<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $primaryKey = 'phrase_id';

    protected $fillable = [
        'vote', 'phrase_id'
    ];

    public function Phrase()
    {
        return $this->belongsTo(Phrase::class);
    }
}
