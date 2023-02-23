<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\FoodPreparation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Food_preparations_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $albo = [
            'dish_name' => 'Albóndigas con salsa de la abuela',
            'description' => 'Ingredientes',
            'price' => '9.75',
        ];
        $dish = new FoodPreparation();

        $category = Category::where('name', 'Tapas')->first();
        $foodType = DB::table('food_types')->where('name', 'dish')->value('id');

        $dish->name = 'Albóndigas con salsa de la abuela';
        $dish->description = 'Ingredientes';
        $dish->price = 9.75;
        $dish->food_type_id = $foodType;

        $dish->category()->associate($category);
        $dish->save();
    }
}
