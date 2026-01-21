<?php

namespace Database\Seeders;

use App\Models\LeaveType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeavesTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'vacation', 'default_quota' => 7
            ],
            [
                'name' => 'sick', 'default_quota' => 12
            ],
            [
                'name' => 'compensatory', 'default_quota' => 3
            ],
        ];

        foreach($datas as $data){
            LeaveType::create($data);
        };
    }
}
