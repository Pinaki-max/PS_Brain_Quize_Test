<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Question;

class QuestionSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $questions = [
            [
                'subject_id' => 1,
                'question' => 'What is a lint?',
                'answer_id' => 3,
            ],
            [
                'subject_id' => 1,
                'question' => 'What is the output of this statement "printf("%d", (a++))"?',
                'answer_id' => 6,
            ],
        ];

        foreach ($questions as $question) {
            if (Question::where(['code' => $question['code']])->count() == 0) {
                Question::create($question);
            }
        }
    }
}
