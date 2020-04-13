<?php

use App\Ingredient;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ====== Recipe 1 ======
        Ingredient::create([
            'recipe_id' => 1,
            'ingredients' => json_encode([
                ['name'=>'Ground Beef', 'amount'=>'1', 'measurement'=>'pound'],
                ['name'=>'Cheese', 'amount'=>'1', 'measurement'=>'cup'],
                ['name'=>'Tortilla', 'amount'=>'12', 'measurement'=>'ounce']
            ])
        ]);

        // ====== Recipe 2 ======
        Ingredient::create([
            'recipe_id' => 2,
            'ingredients' => json_encode([
                ['name'=>'Salmon', 'amount'=>'1', 'measurement'=>'pound'],
                ['name'=>'Dijon Mustard', 'amount'=>'4', 'measurement'=>'tablespoon'],
                ['name'=>'Lemon Juice', 'amount'=>'1', 'measurement'=>'tablespoon']
            ])
        ]);

        // // ====== Recipe 3 ======
        Ingredient::create([
            'recipe_id' => 3,
            'ingredients' => json_encode([
                ['name'=>'Chicken', 'amount'=>'2', 'measurement'=>'pound'],
                ['name'=>'Red Bell Pepper', 'amount'=>'1/2', 'measurement'=>'pound'],
                ['name'=>'Onion', 'amount'=>'1/2', 'measurement'=>'pound']
            ])
        ]);

        // // ====== Recipe 4 ======
        Ingredient::create([
            'recipe_id' => 4,
            'ingredients' => json_encode([
                ['name'=>'Spaghetti', 'amount'=>'16', 'measurement'=>'ounce'],
                ['name'=>'Meatballs', 'amount'=>'2', 'measurement'=>'pound']
            ])
        ]);

        // // ====== Recipe 5 ======
        Ingredient::create([
            'recipe_id' => 5,
            'ingredients' => json_encode([
                ['name'=>'Frozen Pizza', 'amount'=>'1', 'measurement'=>'pound']
            ])
        ]);

        // // ====== Recipe 6 ======
        Ingredient::create([
            'recipe_id' => 6,
            'ingredients' => json_encode([
                ['name'=>'Beef', 'amount'=>'2', 'measurement'=>'pound'],
                ['name'=>'Broccoli', 'amount'=>'12', 'measurement'=>'ounce']
            ])
        ]);

        // // ====== Recipe 7 ======
        Ingredient::create([
            'recipe_id' => 7,
            'ingredients' => json_encode([
                ['name'=>'Eggs', 'amount'=>'12', 'measurement'=>'ounce'],
                ['name'=>'Cheese', 'amount'=>'1/2', 'measurement'=>'cup'],
                ['name'=>'Potato', 'amount'=>'1', 'measurement'=>'pound'],
                ['name'=>'Avocado', 'amount'=>'1/4', 'measurement'=>'pound']
            ])
        ]);
    }
}
