<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{

    protected $fillable = [
        'id',
        'data',
    ];
 public function users(){
    return $this->hasMany(users::class);//un tenant possede plusieurs users
 }
 public function students(){
    return $this->hasMany(students::class);//un tenant possede plusieurs students
 }
  public function programs(){
    return $this->hasMany(programs::class);//un tenant possede plusieurs users programs
 }
  public function domains()
    {
        return $this->hasMany(Domain::class);
    }
}
