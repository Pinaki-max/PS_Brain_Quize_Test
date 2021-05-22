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

            [
                'question_id' => 3,
                'option' => "Zim Den",
            ],
            [
                'question_id' => 3,
                'option' => "Guido van Rossum",
            ],
            [
                'question_id' => 3,
                'option' => "Niene Stom",
            ],
            [
                'question_id' => 3,
                'option' => "Wick van Rossum",
            ],

            [
                'question_id' => 4,
                'option' => "1995",
            ],
            [
                'question_id' => 4,
                'option' => "1972",
            ],
            [
                'question_id' => 4,
                'option' => "1981",
            ],
            [
                'question_id' => 4,
                'option' => "1989",
            ],

            [
                'question_id' => 5,
                'option' => "English",
            ],
            [
                'question_id' => 5,
                'option' => "PHP",
            ],
            [
                'question_id' => 5,
                'option' => "C",
            ],
            [
                'question_id' => 5,
                'option' => "All of the above",
            ],
        ];

        foreach ($options as $option) {
            // if (Option::where(['code' => $option['code']])->count() == 0) {
                Option::create($option);
            // }
        }
    }
}
