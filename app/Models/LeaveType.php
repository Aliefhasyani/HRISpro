<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeaveType extends Model
{
    protected $table = 'leaves_types';

    protected $fillable = ['name'];

    public function leaveBalances()
    {
        return $this->hasMany(LeaveBalance::class);
    }

 
}
