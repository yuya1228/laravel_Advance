<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Shop;
use App\Models\Shop_user;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop_user>
 */
class Shop_userFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=>User::factory(),
            'shop_id'=>Shop::factory(),
            'date_start'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'time_start'=>$this->faker->time($format = 'H:i', $max = 'now'),
            'sum_people'=>$this->faker->randomNumber(),
        ];
    }
}
