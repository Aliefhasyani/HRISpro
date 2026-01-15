<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            [
                'employee_name' => 'Mohammad Alief Hasyani',
                'employee_code' => 'IT001',
                'user_id' => 1,
                'departement_id' => 1,
                'position_id' => 3,
                'employment_status' => 'permanent',
                'join_date' => '2023-12-23',
                'base_salary' => 90_000_000,
                'bank_name' => 'Mandiri',
                'bank_account' => '17731008900',
                'status' => 'active',
                'role_id' => 3
            ],
            [
                'employee_name' => 'Siti Aminah',
                'employee_code' => 'HR001',
                'user_id' => 3,
                'departement_id' => 2,
                'position_id' => 2,
                'employment_status' => 'permanent',
                'join_date' => '2024-01-10',
                'base_salary' => 12_000_000,
                'bank_name' => 'BCA',
                'bank_account' => '8830112233',
                'status' => 'active',
                'role_id' => 2
            ],
            [
                'employee_name' => 'Budi Santoso',
                'employee_code' => 'IT045',
                'user_id' => 4,
                'departement_id' => 1,
                'position_id' => 4,
                'employment_status' => 'contract',
                'join_date' => '2024-03-15',
                'base_salary' => 15_000_000,
                'bank_name' => 'BNI',
                'bank_account' => '0091234455',
                'status' => 'active',
                'role_id' => 4
            ],
            [
                'employee_name' => 'Dewi Lestari',
                'employee_code' => 'MK022',
                'user_id' => 5,
                'departement_id' => 3,
                'position_id' => 6,
                'employment_status' => 'intern',
                'join_date' => '2025-11-01',
                'base_salary' => 25_000_000,
                'bank_name' => 'Mandiri',
                'bank_account' => '177000998877',
                'status' => 'active',
                'role_id' => 4
            ],
            [
                'employee_name' => 'Andi Wijaya',
                'employee_code' => 'EX999',
                'user_id' => 2,
                'departement_id' => 4,
                'position_id' => 1,
                'employment_status' => 'permanent',
                'join_date' => '2020-05-20',
                'base_salary' => 30_000_000,
                'bank_name' => 'BCA',
                'bank_account' => '1234567890',
                'status' => 'inactive',
                'role_id' => 1
            ],
        ];

        foreach($employees as $employee){
            Employee::create($employee);
        }

    }
}
