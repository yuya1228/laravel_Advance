<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_name',
        'stars',
        'comment'
    ];

    protected $guarded = [
        'created_at',
        'updated_at',
    ];
}
