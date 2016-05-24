<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    public function lesson()
    {
        return $this->belongsTo('App\Lesson');
    }
}
