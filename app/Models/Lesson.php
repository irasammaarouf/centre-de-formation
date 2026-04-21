<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function session()
    {
        return $this->belongsTo(session::class);
    }

    public function module()
    {
        return $this->belongsTo(module::class);
    }
}
