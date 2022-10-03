<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ErrorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items=[
            ['id' => 1, 'title' => '0002', 'subsystem' => 'MID', 'kategoryId' => 1, 'wagenId' => 2, 'kanalId' => 6, 'content' => 'Kaydetmeden çıkıyorsunuz lütfen kaydet sekmesine basınız.'],
            ['id' => 2, 'title' => '0003', 'subsystem' => 'MID', 'kategoryId' => 5, 'wagenId' => 1, 'kanalId' => 3, 'content' => 'Değiştirmek istediğinize emin misiniz?'],
            ['id' => 3, 'title' => '0005', 'subsystem' => 'MID', 'kategoryId' => 2, 'wagenId' => 3, 'kanalId' => 4, 'content' => 'Aynı isimli sekme mevcut lütfen değiştirip tekrar deneyiniz.'],
            ['id' => 4, 'title' => '0009', 'subsystem' => 'MID', 'kategoryId' => 5, 'wagenId' => 6, 'kanalId' => 2, 'content' => 'Kopyala işlemi bu sayfada gerçekleştirilemiyor.'],
            ['id' => 5, 'title' => '000F', 'subsystem' => 'MID', 'kategoryId' => 4, 'wagenId' => 5, 'kanalId' => 5, 'content' => 'Kayıtlı olmadığı için sistem çalıştırılamıyor.'],
        ];
        DB::table('errors')->truncate();
        DB::table('errors')->insert($items);
    }
}
