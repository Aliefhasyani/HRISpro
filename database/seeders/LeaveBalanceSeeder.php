<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LeaveBalance;

class LeaveBalanceSeeder extends Seeder
{
    public function run(): void
    {
        $datas = [
            [
                'employee_id'  => 1,
                'leave_type_id'=> 1,
                'start_date'   => '2026-12-23',
                'end_date'     => '2027-01-23',
                'total_days'   => 30,
                'status'       => 'approved',
                'approved_by'  => 1,
                'reason'       => 'sick',
            ],
           
        ];

        LeaveBalance::insert($datas);
    }
}
