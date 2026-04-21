<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
     public function levels()
    {
        return $this->hasMany(levels::class);
    }
}
