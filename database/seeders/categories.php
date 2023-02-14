<?php

namespace Database\Seeders;

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

        foreach ($cat as $c) {
            DB::table('categories')->insert([
                'cat_name' => $c,
            ]);
        }
    }
}
