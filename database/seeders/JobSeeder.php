<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = [
            [
                'company_name' => 'PT. Yamaha',
                'title' => 'Engineer',
                'description' => 'description',
                'phone' => '08935476328',
                'job_type' => 'Full Time',
                'placement' => 'Jogja',
                'salary' => '10000000',
            ]
        ];
        DB::table('jobs')->insert($jobs);
    }
}
