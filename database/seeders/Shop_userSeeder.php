<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shop_user;

class Shop_userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop_user::create ([
            'user_id'=>'1',
            'shop_id'=>'1',
            'date_start'=> date('Y-m-d'),
        ]);

        Shop_user::create([
            'user_id' => '2',
            'shop_id' => '2',
            'date_start' => date('Y-m-d'),
            'time_start'=>date('H:i:s'),
        ]);

        Shop_user::create([
            'user_id' => '3',
            'shop_id' => '3',
            'date_start' => date('Y-m-d'),
            'time_start' => date('H:i:s'),
        ]);

        Shop_user::create([
            'user_id' => '4',
            'shop_id' => '4',
            'date_start' => date('Y-m-d'),
            'time_start' => date('H:i:s'),
        ]);

        Shop_user::create([
            'user_id' => '5',
            'shop_id' => '5',
            'date_start' => date('Y-m-d'),
            'time_start' => date('H:i:s'),
        ]);

        Shop_user::create([
            'user_id' => '6',
            'shop_id' => '6',
            'date_start' => date('Y-m-d'),
            'time_start' => date('H:i:s'),
        ]);

        Shop_user::create([
            'user_id' => '7',
            'shop_id' => '7',
            'date_start' => date('Y-m-d'),
            'time_start' => date('H:i:s'),
        ]);

        Shop_user::create([
            'user_id' => '8',
            'shop_id' => '8',
            'date_start' => date('Y-m-d'),
            'time_start' => date('H:i:s'),
        ]);

        Shop_user::create([
            'user_id' => '9',
            'shop_id' => '9',
            'date_start' => date('Y-m-d'),
            'time_start' => date('H:i:s'),
        ]);

        Shop_user::create([
            'user_id' => '10',
            'shop_id' => '10',
            'date_start' => date('Y-m-d'),
            'time_start' => date('H:i:s'),
        ]);

        Shop_user::create([
            'user_id' => '11',
            'shop_id' => '11',
            'date_start' => date('Y-m-d'),
            'time_start' => date('H:i:s'),
        ]);

        Shop_user::create([
            'user_id' => '12',
            'shop_id' => '12',
            'date_start' => date('Y-m-d'),
            'time_start' => date('H:i:s'),
        ]);

        Shop_user::create([
            'user_id' => '13',
            'shop_id' => '13',
            'date_start' => date('Y-m-d'),
            'time_start' => date('H:i:s'),
        ]);

        Shop_user::create([
            'user_id' => '14',
            'shop_id' => '14',
            'date_start' => date('Y-m-d'),
            'time_start' => date('H:i:s'),
        ]);

        Shop_user::create([
            'user_id' => '15',
            'shop_id' => '15',
            'date_start' => date('Y-m-d'),
            'time_start' => date('H:i:s'),
        ]);

        Shop_user::create([
            'user_id' => '16',
            'shop_id' => '16',
            'date_start' => date('Y-m-d'),
            'time_start' => date('H:i:s'),
        ]);

        Shop_user::create([
            'user_id' => '17',
            'shop_id' => '17',
            'date_start' => date('Y-m-d'),
            'time_start' => date('H:i:s'),
        ]);

        Shop_user::create([
            'user_id' => '18',
            'shop_id' => '18',
            'date_start' => date('Y-m-d'),
            'time_start' => date('H:i:s'),
        ]);

        Shop_user::create([
            'user_id' => '19',
            'shop_id' => '19',
            'date_start' => date('Y-m-d'),
            'time_start' => date('H:i:s'),
        ]);

        Shop_user::create([
            'user_id' => '20',
            'shop_id' => '20',
            'date_start' => date('Y-m-d'),
            'time_start' => date('H:i:s'),
        ]);
    }
}
