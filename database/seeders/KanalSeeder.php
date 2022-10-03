<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KanalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items=[
            ['id' => 1, 'content' => '0000 0011 0001 0000'],
            ['id' => 2, 'content' => '0010 0000 0001 0000'],
            ['id' => 3, 'content' => '0011 0001 0001 0000'],
            ['id' => 4, 'content' => '0001 0011 0101 0000'],
            ['id' => 5, 'content' => '0000 1011 0010 0010'],
            ['id' => 6, 'content' => '0000 0000 1100 0100'],
        ];
        DB::table('kanals')->truncate();
        DB::table('kanals')->insert($items);
    }
}
