<?php

use App\Step;
use Illuminate\Database\Seeder;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ====== Recipe 1 ======
        Step::create([
            'recipe_id' => 1,
            'steps' => json_encode([
                ['number' => 1, 'instruction' => 'Cook ground beef'],
                ['number' => 2, 'instruction' => 'Add cooked beef and cheese to tortilla']
            ])
        ]);

        // ====== Recipe 2 ======
        Step::create([
            'recipe_id' => 2,
            'steps' => json_encode([
                ['number' => 1, 'instruction' => 'Mix dijon and lemon juice in small bowl'],
                ['number' => 2, 'instruction' => 'Cover salmon with dijon/lemon sauce'],
                ['number' => 3, 'instruction' => 'Bake salmon for 15 minutes']
            ])
        ]);

        // // ====== Recipe 3 ======
        Step::create([
            'recipe_id' => 3,
            'steps' => json_encode([
                ['number' => 1, 'instruction' => 'Chop chicken, peppers, and onion into strips'],
                ['number' => 2, 'instruction' => 'Put chopped ingredients on a pan and season'],
                ['number' => 3, 'instruction' => 'Bake for 25 minutes'],
                ['number' => 4, 'instruction' => 'Stuff tortilla with the goods']
            ])
        ]);

        // // ====== Recipe 4 ======
        Step::create([
            'recipe_id' => 4,
            'steps' => json_encode([
                ['number' => 1, 'instruction' => 'Cook spaghetti according to the box'],
                ['number' => 2, 'instruction' => 'Bake the meatballs for 20 minutes'],
                ['number' => 3, 'instruction' => 'Combine spaghetti, meatballs, and sauce']
            ])
        ]);

        // // ====== Recipe 5 ======
        Step::create([
            'recipe_id' => 5,
            'steps' => json_encode([
                ['number' => 1, 'instruction' => 'Cook pizza according to the box']
            ])
        ]);

        // // ====== Recipe 6 ======
        Step::create([
            'recipe_id' => 6,
            'steps' => json_encode([
                ['number' => 1, 'instruction' => 'Cut beef into strips and marinate with soy sauce'],
                ['number' => 2, 'instruction' => 'Chop broccoli'],
                ['number' => 3, 'instruction' => 'Cook meat in pan for 5 minutes'],
                ['number' => 4, 'instruction' => 'Add broccoli to the pan and continue to cook until soft']
            ])
        ]);

        // // ====== Recipe 7 ======
        Step::create([
            'recipe_id' => 7,
            'steps' => json_encode([
                ['number' => 1, 'instruction' => 'Scramble eggs'],
                ['number' => 2, 'instruction' => 'Cut potatoes into small cubes and bake in oven until soft'],
                ['number' => 3, 'instruction' => 'Add eggs and potatoes to a tortilla'],
                ['number' => 4, 'instruction' => 'Top with sliced avocado']
            ])
        ]);
    }
}
