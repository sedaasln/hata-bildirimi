<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items=[
            ['id' => 1, 'content' => 'sesrrttbbnn'],
            ['id' => 2, 'content' => 'betriebstörung'],
            ['id' => 3, 'content' => 'weströbnnty'],
            ['id' => 4, 'content' => 'rekmbnrtuyp'],
            ['id' => 5, 'content' => 'handrtnis'],
            ['id' => 6, 'content' => 'pnröbnüğr'],
        ];
        DB::table('kategories')->truncate();
        DB::table('kategories')->insert($items);
    }
}
