<?php

namespace Database\Seeders;

use App\Models\FoodPreparation;
use App\Models\FoodPreparationTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodPreparationTranslations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $preparations = FoodPreparation::all();

        foreach ($preparations as $key => $dish) {
            # code...
            $translate = new FoodPreparationTranslation;
            $translate->locale = 'es';
            $translate->food_preparation_id = $dish->id;
            $translate->name = $dish->name;
            $translate->description = $dish->description;
            $translate->dish()->associate($dish);
            $translate->save();
        }
    }
}
