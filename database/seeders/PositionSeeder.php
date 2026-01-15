<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $position = [
            'CEO',
            'Human Resources Manager',
            'IT Manager',
            'Software Engineer',
            'Accountant',
            'Marketing Specialist',
            'Administrative Assistant',
            'Sales Representative'
        ];

        foreach($position as $position){
            Position::create([
                'position' => $position
            ]);
        }
      
    }
}
