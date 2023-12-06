<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Index;

class IndexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Index::create([
            'book_id' => 1,
            'index' => 'ユークリッド平面の座標と軽量',
        ]);
        Index::create([
            'book_id' => 1,
            'index' => '曲面の計量と曲率',
        ]);
        Index::create([
            'book_id' => 1,
            'index' => 'リーマン計量',
        ]);
        Index::create([
            'book_id' => 1,
            'index' => '種々の一般計量',
        ]);
        Index::create([
            'book_id' => 1,
            'index' => 'フィンスラー幾何学',
        ]);
    }
}
