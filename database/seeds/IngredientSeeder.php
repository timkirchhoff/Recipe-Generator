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
                ['amount'=>'1', 'measurement'=>'pound', 'name'=>'Ground Beef'],
                ['amount'=>'1', 'measurement'=>'cup', 'name'=>'Cheese'],
                ['amount'=>'12', 'measurement'=>'ounce', 'name'=>'Tortilla']
            ])
        ]);

        // ====== Recipe 2 ======
        Ingredient::create([
            'recipe_id' => 2,
            'ingredients' => json_encode([
                ['amount'=>'1', 'measurement'=>'pound', 'name'=>'Salmon'],
                ['amount'=>'4', 'measurement'=>'tablespoon', 'name'=>'Dijon Mustard'],
                ['amount'=>'1', 'measurement'=>'tablespoon', 'name'=>'Lemon Juice']
            ])
        ]);

        // // ====== Recipe 3 ======
        Ingredient::create([
            'recipe_id' => 3,
            'ingredients' => json_encode([
                ['amount'=>'2', 'measurement'=>'pound', 'name'=>'Chicken'],
                ['amount'=>'1/2', 'measurement'=>'pound', 'name'=>'Red Bell Pepper'],
                ['amount'=>'1/2', 'measurement'=>'pound', 'name'=>'Onion']
            ])
        ]);

        // // ====== Recipe 4 ======
        Ingredient::create([
            'recipe_id' => 4,
            'ingredients' => json_encode([
                ['amount'=>'16', 'measurement'=>'ounce', 'name'=>'Spaghetti'],
                ['amount'=>'2', 'measurement'=>'pound', 'name'=>'Meatballs']
            ])
        ]);

        // // ====== Recipe 5 ======
        Ingredient::create([
            'recipe_id' => 5,
            'ingredients' => json_encode([
                ['amount'=>'1', 'measurement'=>'pound', 'name'=>'Frozen Pizza']
            ])
        ]);

        // // ====== Recipe 6 ======
        Ingredient::create([
            'recipe_id' => 6,
            'ingredients' => json_encode([
                ['amount'=>'2', 'measurement'=>'pound', 'name'=>'Beef'],
                ['amount'=>'12', 'measurement'=>'ounce', 'name'=>'Broccoli']
            ])
        ]);

        // // ====== Recipe 7 ======
        Ingredient::create([
            'recipe_id' => 7,
            'ingredients' => json_encode([
                ['amount'=>'12', 'measurement'=>'ounce', 'name'=>'Eggs'],
                ['amount'=>'1/2', 'measurement'=>'cup', 'name'=>'Cheese'],
                ['amount'=>'1', 'measurement'=>'pound', 'name'=>'Potato'],
                ['amount'=>'1/4', 'measurement'=>'pound', 'name'=>'Avocado']
            ])
        ]);
    }
}
