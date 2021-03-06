<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function term()
    {
        return $this->belongsTo(Term::class);
    }
    public $timestamps = false;
}
