<?php

namespace Database\Seeders;

use App\Models\Departement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departements = [
            'Information Technology',
            'Human Resource',
            'Finance',
            'Marketing',
            'Law',
            'Public Relations'
        ];

        foreach($departements as $departement){
            Departement::create([
                'departement' => $departement
            ]);
        }
    }
}
