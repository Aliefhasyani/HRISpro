<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    protected $fillable = [
        'employee_name',
        'employee_code',
        'role_id',
        'departement_id',
        'position_id',
        'employment_status',
        'join_date',
        'base_salary',
        'bank_name',
        'bank_account',
        'status'
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function departement(){
        return $this->belongsTo(Departement::class);
    }

    public function position(){
        return $this->belongsTo(Position::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
