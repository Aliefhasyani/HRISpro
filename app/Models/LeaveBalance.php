<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeaveBalance extends Model
{
    protected $table = 'leave_balances' ;

    protected $fillable = ['employee_id','leave_type_id','start_date','end_date','total_days','status','approved_by','reason'];


    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function leaveType()
    {
        return $this->belongsTo(LeaveType::class);
    }

    public function approvedBy()
    {
        return $this->belongsTo(Role::class, 'approved_by');
    }
}


