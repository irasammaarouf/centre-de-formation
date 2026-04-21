<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'tenant_id',
        'user_id',
        'code'
    ];
   public function session()
    {
        return $this->belongsToMany(Session::class, 'enrollments');
    }
    public function user()
{
    return $this->belongsTo(User::class);
}
}
