<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = ['Bebidas','Tapas','Carnes', 'Pescados', 'Pastas', 'Paellas', 'Postres'];

        foreach ($cat as $i => $c) {
            $cat = new Category();
            $cat->name = $c;
            // $cat->icon()->associate($i);
            $cat->save();

        }
    }
}
