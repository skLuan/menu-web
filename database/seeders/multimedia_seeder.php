<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Multimedia_type;
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

        $iconType = Multimedia_type::firstWhere('name', 'icon');

        define('ICONS', '/image/icons/');
        $icon_url = '';
        $icon_url_Active = '';
        foreach ($category as $c) {
            $multi = new Multimedia_url();
            $multiActive = new Multimedia_url();
            switch($c->name) {
                case 'Bebidas':
                    $icon_url = ICONS.'drinks.svg';
                    $icon_url_Active = ICONS.'drinksActive.svg';
                break;
                case 'Tapas':
                    $icon_url = ICONS.'tapas.svg';
                    $icon_url_Active = ICONS.'tapasActive.svg';
                break;
                case 'Carnes':
                    $icon_url = ICONS.'meat.svg';
                    $icon_url_Active = ICONS.'meatActive.svg';
                break;
                case 'Pescados':
                    $icon_url = ICONS.'fish.svg';
                    $icon_url_Active = ICONS.'fishActive.svg';
                break;
                case 'Pastas':
                    $icon_url = ICONS.'pasta.svg';
                    $icon_url_Active = ICONS.'pastaActive.svg';
                break;
                case 'Paellas':
                    $icon_url = ICONS.'paella.svg';
                    $icon_url_Active = ICONS.'paellaActive.svg';
                break;
                case 'Postres':
                    $icon_url = ICONS.'dessert.svg';
                    $icon_url_Active = ICONS.'dessertActive.svg';
                break;
            }
            $multi->url = $icon_url;
            $multi->save();
            $multi->category()->attach($c);
            $iconType->multimedia()->save($multi);

            $multiActive->url = $icon_url_Active;
            $multiActive->save();
            $multiActive->category()->attach($c);
            $iconType->multimedia()->save($multiActive);

        }
    }
}
