<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        if (DB::table('students')->count() == 0) {
            DB::table('students')->insert([
                [
                    'id' => '1',
                    'name' => 'Linh',
                    'address' => 'Nguyen Van A',
                    'university' => 'FPT',
                    'class_id' => 1,
                ],
                [
                    'id' => '2',
                    'name' => 'Luong',
                    'address' => 'HN',
                    'university' => 'FPT',
                    'class_id' => 2,
                ],
                [
                    'id' => '3',
                    'name' => 'Nam',
                    'address' => 'NH',
                    'university' => 'FPT',
                    'class_id' => 3,
                ],
            ]);
        }
    }
}