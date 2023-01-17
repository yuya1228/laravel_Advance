<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'id'=>'1',
            'genre'=>'寿司',
        ]);

        Genre::create([
            'id' => '2',
            'genre' => '焼肉',
        ]);

        Genre::create([
            'id' => '3',
            'genre' => '居酒屋',
        ]);

        Genre::create([
            'id' => '4',
            'genre' => 'イタリアン',
        ]);

        Genre::create([
            'id' => '5',
            'genre' => 'ラーメン',
        ]);

        Genre::create([
            'id' => '6',
            'genre' => '焼肉',
        ]);

        Genre::create([
            'id' => '7',
            'genre' => 'イタリアン',
        ]);

        Genre::create([
            'id' => '8',
            'genre' => 'ラーメン',
        ]);

        Genre::create([
            'id' => '9',
            'genre' => '居酒屋',
        ]);

        Genre::create([
            'id' => '10',
            'genre' => '寿司',
        ]);

        Genre::create([
            'id' => '11',
            'genre' => '焼肉',
        ]);

        Genre::create([
            'id' => '12',
            'genre' => '焼肉',
        ]);

        Genre::create([
            'id' => '13',
            'genre' => '居酒屋',
        ]);

        Genre::create([
            'id' => '14',
            'genre' => '寿司',
        ]);

        Genre::create([
            'id' => '15',
            'genre' => 'ラーメン',
        ]);

        Genre::create([
            'id' => '16',
            'genre' => '居酒屋',
        ]);

        Genre::create([
            'id' => '17',
            'genre' => '寿司',
        ]);

        Genre::create([
            'id' => '18',
            'genre' => '焼肉',
        ]);

        Genre::create([
            'id' => '19',
            'genre' => 'イタリアン',
        ]);

        Genre::create([
            'id' => '20',
            'genre' => '寿司',
        ]);
    }
};
