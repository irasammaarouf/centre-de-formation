<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    public function student()
    {
        return $this->belongsTo(student::class);
    }

    public function session()
    {
        return $this->belongsTo(session::class);
    }
}
