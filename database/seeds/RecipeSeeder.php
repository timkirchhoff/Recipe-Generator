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
            'description' => 'Ground beef tacos with all the fixins'
        ]);

        $recipe2 = Recipe::create([
            'title' => 'Salmon',
            'description' => 'Baked salmon with a dijon and lemon sauce'
        ]);

        $recipe3 = Recipe::create([
            'title' => 'Fajitas',
            'description' => 'Sheet pan chicken fajitas with peppers and onions'
        ]);

        $recipe4 = Recipe::create([
            'title' => 'Spaghetti and Meatballs',
            'description' => 'Spaghetti with hand rolled ground turkey meatballs'
        ]);

        $recipe5 = Recipe::create([
            'title' => 'Pizza',
            'description' => 'Frozen pizza of your choice'
        ]);

        $recipe6 = Recipe::create([
            'title' => 'Beef and Broccoli',
            'description' => 'Classic homemade chinese food'
        ]);

        $recipe7 = Recipe::create([
            'title' => 'Breakfast Burrito',
            'description' => 'Breakfast for dinner!'
        ]);
    }
}
