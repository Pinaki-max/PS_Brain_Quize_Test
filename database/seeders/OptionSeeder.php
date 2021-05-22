<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Option;

class OptionSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $options = [
            [
                'question_id' => 1,
                'option' => "C compiler",
            ],
            [
                'question_id' => 1,
                'option' => "Interactive debugger",
            ],
            [
                'question_id' => 1,
                'option' => "Analyzing tool",
            ],
            [
                'question_id' => 1,
                'option' => "C interpreter",
            ],
            [
                'question_id' => 2,
                'option' => "The value of (a + 1)",
            ],
            [
                'question_id' => 2,
                'option' => "The current value of a",
            ],
            [
                'question_id' => 2,
                'option' => "Error message",
            ],
            [
                'question_id' => 2,
                'option' => "Garbage",
            ],
        ];

        foreach ($options as $option) {
            // if (Option::where(['code' => $option['code']])->count() == 0) {
                Option::create($option);
            // }
        }
    }
}
