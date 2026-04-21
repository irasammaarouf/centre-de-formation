<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function level(){
        return $this->belongsTo(level::class);
    }
}
