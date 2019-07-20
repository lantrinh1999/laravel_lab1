<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        if (DB::table('classes')->count() == 0) {
            DB::table('classes')->insert([
                [
                    'id' => '1',
                    'name' => 'PT1111',
                    'teacher_name' => 'Nguyen Van A',
                    'major' => 'CNTT',
                    'max_student' => 40,
                ],
                [
                    'id' => '2',
                    'name' => 'PT1113',
                    'teacher_name' => 'Nguyen Van B',
                    'major' => 'MKT',
                    'max_student' => 41,
                ],
                [
                    'id' => '3',
                    'name' => 'PT1114',
                    'teacher_name' => 'Nguyen Van C',
                    'major' => 'DL',
                    'max_student' => 44,
                ],
            ]);
        }
    }
}