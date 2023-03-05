<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CategoryTrans extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();

        foreach ($categories as $key => $cat) {
            # code...
            $translate = new CategoryTranslation;
            $translate->locale = 'es';
            $translate->category_id = $cat->id;
            // $translate->name = $cat->name;
            $translate->categories()->associate($cat);
            // $translate->save();
        }
    }
}
