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
            'number' => 1,
            'instruction' => 'Cook ground beef'
        ]);
        Step::create([
            'recipe_id' => 1,
            'number' => 2,
            'instruction' => 'Add cooked beef and cheese to tortilla'
        ]);

        // ====== Recipe 2 ======
        Step::create([
            'recipe_id' => 2,
            'number' => 1,
            'instruction' => 'Mix dijon and lemon juice in small bowl'
        ]);
        Step::create([
            'recipe_id' => 2,
            'number' => 2,
            'instruction' => 'Cover salmon with dijon/lemon juice sauce'
        ]);
        Step::create([
            'recipe_id' => 2,
            'number' => 3,
            'instruction' => 'Bake salmon for 15 minutes'
        ]);

        // ====== Recipe 3 ======
        Step::create([
            'recipe_id' => 3,
            'number' => 1,
            'instruction' => 'Chopped chicken, peppers, and onion into strips'
        ]);
        Step::create([
            'recipe_id' => 3,
            'number' => 2,
            'instruction' => 'Put chopped ingredients on a pan and season'
        ]);
        Step::create([
            'recipe_id' => 3,
            'number' => 3,
            'instruction' => 'Bake for 25 minutes'
        ]);
        Step::create([
            'recipe_id' => 3,
            'number' => 4,
            'instruction' => 'Stuff tortilla with the goods'
        ]);

        // ====== Recipe 4 ======
        Step::create([
            'recipe_id' => 4,
            'number' => 1,
            'instruction' => 'Cook spaghetti according to the box'
        ]);
        Step::create([
            'recipe_id' => 4,
            'number' => 2,
            'instruction' => 'Bake the meatballs for 20 minutes'
        ]);
        Step::create([
            'recipe_id' => 4,
            'number' => 3,
            'instruction' => 'Combine spaghetti, meatballs, and sauce'
        ]);

        // ====== Recipe 5 ======
        Step::create([
            'recipe_id' => 5,
            'number' => 1,
            'instruction' => 'Cook pizza according to the box'
        ]);

        // ====== Recipe 6 ======
        Step::create([
            'recipe_id' => 6,
            'number' => 1,
            'instruction' => 'Cut beef into strips and marinate with soy sauce'
        ]);
        Step::create([
            'recipe_id' => 6,
            'number' => 2,
            'instruction' => 'Chop broccoli'
        ]);
        Step::create([
            'recipe_id' => 6,
            'number' => 3,
            'instruction' => 'Cook meat in pan for 5 minutes'
        ]);
        Step::create([
            'recipe_id' => 6,
            'number' => 4,
            'instruction' => 'Add broccoli to the pan and continue to cook until soft'
        ]);

        // ====== Recipe 7 ======
        Step::create([
            'recipe_id' => 7,
            'number' => 1,
            'instruction' => 'Scramble eggs'
        ]);
        Step::create([
            'recipe_id' => 7,
            'number' => 2,
            'instruction' => 'Cut potatoes into small cubes and bake in oven until soft'
        ]);
        Step::create([
            'recipe_id' => 7,
            'number' => 3,
            'instruction' => 'Add eggs and potatoes to a tortialla'
        ]);
        Step::create([
            'recipe_id' => 7,
            'number' => 4,
            'instruction' => 'Top with sliced avocado'
        ]);
    }
}
