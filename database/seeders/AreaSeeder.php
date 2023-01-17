<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
            'id'=>'1',
            'area'=>'東京都',
        ]);

        Area::create([
            'id'=>'2',
            'area' => '大阪府',
        ]);

        Area::create([
            'id'=>'3',
            'area' => '福岡県',
        ]);

        Area::create([
            'id' => '4',
            'area' => '東京都',
        ]);

        Area::create([
            'id' => '5',
            'area' => '福岡県',
        ]);

        Area::create([
            'id' => '6',
            'area' => '東京都',
        ]);

        Area::create([
            'id' => '7',
            'area' => '大阪府',
        ]);

        Area::create([
            'id' => '8',
            'area' => '東京都',
        ]);

        Area::create([
            'id' => '9',
            'area' => '大阪府',
        ]);

        Area::create([
            'id' => '10',
            'area' => '東京都',
        ]);

        Area::create([
            'id' => '11',
            'area' => '大阪府',
        ]);

        Area::create([
            'id' => '12',
            'area' => '福岡県',
        ]);

        Area::create([
            'id' => '13',
            'area' => '東京都',
        ]);

        Area::create([
            'id' => '14',
            'area' => '大阪府',
        ]);

        Area::create([
            'id' => '15',
            'area' => '東京都',
        ]);

        Area::create([
            'id' => '16',
            'area' => '大阪府',
        ]);

        Area::create([
            'id' => '17',
            'area' => '東京都',
        ]);

        Area::create([
            'id' => '18',
            'area' => '東京都',
        ]);

        Area::create([
            'id' => '19',
            'area' => '福岡県',
        ]);

        Area::create([
            'id' => '20',
            'area' => '大阪府',
        ]);
    }
};
