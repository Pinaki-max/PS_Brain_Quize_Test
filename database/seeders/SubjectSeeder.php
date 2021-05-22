<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Subject;

class SubjectSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $subjects = [
            [
                'code' => 'c',
                'full_name' => 'C Programming Language',
            ],
            [
                'code' => 'python3',
                'full_name' => 'Python Programming Language',
            ],
            [
                'code' => 'java',
                'full_name' => 'java Science Language',
            ],
        ];

        foreach ($subjects as $subject) {
            if (Subject::where(['code' => $subject['code']])->count() == 0) {
                Subject::create($subject);
            }
        }
    }
}
