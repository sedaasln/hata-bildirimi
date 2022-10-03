<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items=[
            ['id' => 1, 'content' => '0001 0000 0000 0000'],
            ['id' => 2, 'content' => '0000 0001 0000 0000'],
            ['id' => 3, 'content' => '0000 0000 0001 0000'],
            ['id' => 4, 'content' => '0000 0000 0000 0001'],
            ['id' => 5, 'content' => '0001 0001 0000 0000'],
            ['id' => 6, 'content' => '0000 0000 0000 0000'],
        ];
        DB::table('wagens')->truncate();
        DB::table('wagens')->insert($items);
    }
}
