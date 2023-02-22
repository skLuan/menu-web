<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Multimedia_types extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['icon', 'image', 'video'];

        foreach ($tags as $c) {
            DB::table('multimedia_types')->insert([
                'name' => $c,
            ]);
        }
    }
}
