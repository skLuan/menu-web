<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Dishes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dishes_seeder extends Seeder
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
        $dish = new Dishes();
        $category = DB::table('categories')->where('cat_name', 'Tapas')->value('id');

        $dish->dish_name = 'Albóndigas con salsa de la abuela';
        $dish->description = 'Ingredientes';
        $dish->price = 9.75;
        $dish->category()->associate($category);
        $dish->save();
    }
}
