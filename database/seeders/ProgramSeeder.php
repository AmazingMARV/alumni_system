<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        //
        $programs=[
            [
                'program' => 'BEED',
                'program_desc' => 'Bachelor of Science in Elementary Education'
            ],
            [
                'program' => 'BSED-MATH',
                'program_desc' => 'Bachelor of Science in Secondary Education Major in Mathematics'
            ],
            [
                'program' => 'BSCS',
                'program_desc' => 'Bachelor of Science in Computer Science'
            ]
        ];

        Program::insertOrIgnore($programs);
    }
}
