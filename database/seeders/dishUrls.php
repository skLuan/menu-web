<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Multimedia_url;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dishUrls extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::all();
        define('BASEURL','/image/preparations/');
        foreach ($category as $key => $cat) {
            $dishes = $cat->foodPreparations()->get();

            foreach ($dishes as $dish) {
                $imgUrl = new Multimedia_url;
                $imgUrl->url = BASEURL . $cat->id . '/' . $dish->id . '.png';
                $imgUrl->multimedia_type_id = '2';
                $imgUrl->save();
                $imgUrl->fPreparations()->attach($dish);
            }
        }
    }
}
