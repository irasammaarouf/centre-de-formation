<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
  public function lessons(){
        return $this->hasMany(lesson::class);
    }
    public function enrollments(){
        return $this->hasMany(enrollment::class);
    }
    public function program(){
        return $this->belongsTo(program::class);
    }
    public function level(){
        return $this->belongsTo(level::class);
    }
    public function students(){
      return $this->belongsToMany(student::class, 'enrollments');
    }
}
