<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alumnis = [
            [
                'name' => 'Alumni 1',
                'company' => 'PT. Alumni',
                'address' => 'Address Alumni',
                'domicile' => 'Domicile Alumni',
                'email' => 'alumni@email.com',
                'phone' => '0863562357632',
                'birth_place' => 'Jakarta',
                'birth_date' => '1991-12-30',
                'generation' => '2008',
                'program_studi' => 'Teknik Industri',
            ]
        ];
        DB::table('alumnis')->insert($alumnis);
    }
}
