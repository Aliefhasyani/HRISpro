<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = ['roles'];

    public function employees(){
        return $this->hasMany(Employee::class);
    }
}
