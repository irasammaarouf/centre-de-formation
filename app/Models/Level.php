<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function modules() {
        return $this->hasMany(module::class);
    }
}
