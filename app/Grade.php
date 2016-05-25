<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public function lessons()
    {
        return $this->hasMany('App\Lesson');
    }
}
