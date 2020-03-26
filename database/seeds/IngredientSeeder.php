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
            'name' => 'Ground Beef',
            'amount' => '1',
            'measurement' => 'pound'
        ]);
        Ingredient::create([
            'recipe_id' => 1,
            'name' => 'Cheese',
            'amount' => '1',
            'measurement' => 'cup'
        ]);
        Ingredient::create([
            'recipe_id' => 1,
            'name' => 'Tortilla',
            'amount' => '12',
            'measurement' => 'ounce'
        ]);

        // ====== Recipe 2 ======
        Ingredient::create([
            'recipe_id' => 2,
            'name' => 'Salmon',
            'amount' => '1',
            'measurement' => 'pound'
        ]);
        Ingredient::create([
            'recipe_id' => 2,
            'name' => 'Dijon Mustard',
            'amount' => '4',
            'measurement' => 'tablespoon'
        ]);
        Ingredient::create([
            'recipe_id' => 2,
            'name' => 'Lemon Juice',
            'amount' => '1',
            'measurement' => 'tablespoon'
        ]);

        // ====== Recipe 3 ======
        Ingredient::create([
            'recipe_id' => 3,
            'name' => 'Chicken',
            'amount' => '1',
            'measurement' => 'pound'
        ]);
        Ingredient::create([
            'recipe_id' => 3,
            'name' => 'Pepper',
            'amount' => '1/2',
            'measurement' => 'pound'
        ]);
        Ingredient::create([
            'recipe_id' => 3,
            'name' => 'Onion',
            'amount' => '1/2',
            'measurement' => 'pound'
        ]);

        // ====== Recipe 4 ======
        Ingredient::create([
            'recipe_id' => 4,
            'name' => 'Spaghetti',
            'amount' => '16',
            'measurement' => 'ounce'
        ]);
        Ingredient::create([
            'recipe_id' => 4,
            'name' => 'Meatballs',
            'amount' => '2',
            'measurement' => 'pound'
        ]);

        // ====== Recipe 5 ======
        Ingredient::create([
            'recipe_id' => 5,
            'name' => 'Frozen Pizza',
            'amount' => '1',
            'measurement' => 'pound'
        ]);

        // ====== Recipe 6 ======
        Ingredient::create([
            'recipe_id' => 6,
            'name' => 'Beef',
            'amount' => '2',
            'measurement' => 'pound'
        ]);
        Ingredient::create([
            'recipe_id' => 6,
            'name' => 'Broccoli',
            'amount' => '12',
            'measurement' => 'ounce'
        ]);

        // ====== Recipe 7 ======
        Ingredient::create([
            'recipe_id' => 7,
            'name' => 'Scrambled Eggs',
            'amount' => '12',
            'measurement' => 'ounce'
        ]);
        Ingredient::create([
            'recipe_id' => 7,
            'name' => 'Cheese',
            'amount' => '2',
            'measurement' => 'ounce'
        ]);
        Ingredient::create([
            'recipe_id' => 7,
            'name' => 'Potato',
            'amount' => '1',
            'measurement' => 'pound'
        ]);
        Ingredient::create([
            'recipe_id' => 7,
            'name' => 'Avocado',
            'amount' => '1/4',
            'measurement' => 'pound'
        ]);
    }
}
