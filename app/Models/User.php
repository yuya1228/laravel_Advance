<?php

namespace App\Models;

use App\Notifications\User\VerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified',
        'email_verify_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail());
    }

    public function shop_users()
    {
        return $this ->belongsToMany(Shop_user::class)->withTimestamps();
    }

    public function shops()
    {
        return $this ->belongsToMany(Shop::class,'likes','user_id','shop_id')->withTimestamps();
    }
}
