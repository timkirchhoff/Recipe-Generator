<?php

use App\Recipe;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipe1 = Recipe::create([
            'title' => 'Tacos',
            'description' => 'Ground beef tacos with all the fixins',
            'user_id' => 1
        ]);

        $recipe2 = Recipe::create([
            'title' => 'Salmon',
            'description' => 'Baked salmon with a dijon and lemon sauce',
            'user_id' => 1
        ]);

        $recipe3 = Recipe::create([
            'title' => 'Fajitas',
            'description' => 'Sheet pan chicken fajitas with peppers and onions',
            'user_id' => 1
        ]);

        $recipe4 = Recipe::create([
            'title' => 'Spaghetti and Meatballs',
            'description' => 'Spaghetti with hand rolled ground turkey meatballs',
            'user_id' => 2
        ]);

        $recipe5 = Recipe::create([
            'title' => 'Pizza',
            'description' => 'Frozen pizza of your choice',
            'user_id' => 2
        ]);

        $recipe6 = Recipe::create([
            'title' => 'Beef and Broccoli',
            'description' => 'Classic homemade chinese food',
            'user_id' => 1
        ]);

        $recipe7 = Recipe::create([
            'title' => 'Breakfast Burrito',
            'description' => 'Breakfast for dinner!',
            'user_id' => 2
        ]);
    }
}
