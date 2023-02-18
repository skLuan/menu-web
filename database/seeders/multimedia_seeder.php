<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Multimedia_url;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class multimedia_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::get();
        define('ICONS', '/image/icons/');
        $icon_url = '';
        foreach ($category as $c) {
            $multi = new Multimedia_url();
            switch($c->cat_name) {
                case 'Bebidas':
                    $icon_url = ICONS.'drinks.svg';
                break;
                case 'Tapas':
                    $icon_url = ICONS.'tapas.svg';
                break;
                case 'Carnes':
                    $icon_url = ICONS.'meat.svg';
                break;
                case 'Pescados':
                    $icon_url = ICONS.'fish.svg';
                break;
                case 'Pastas':
                    $icon_url = ICONS.'pasta.svg';
                break;
                case 'Paellas':
                    $icon_url = ICONS.'paella.svg';
                break;
                case 'Postres':
                    $icon_url = ICONS.'dessert.svg';
                break;
            }
            $multi->url = $icon_url;
            $multi->type = 0;
            $multi->save();
            $c->icon_multimedia_id = $multi->id;
            $c->save();
        }
    }
}
