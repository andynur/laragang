<?php

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher_data = [
            [
                'name' => 'Pak Dani',
                'contact' => '0812 5398 110',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bu Dar',
                'contact' => '0811 1198 110',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pak Zul',
                'contact' => '0813 3411 2110',
                'created_at' => date('Y-m-d H:i:s')
            ],
        ];

        DB::table('teacher')->insert($teacher_data);
    }
}
