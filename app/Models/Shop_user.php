<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop_user extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'shop_id',
        'date_start',
        'time_start',
        'sum_people'
    ];
}
