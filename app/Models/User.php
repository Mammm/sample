<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    const GRAVATAR_URL = 'www.gravatar.com';

    public function avatar(int $size = 140)
    {
        $hash = md5(strtolower(trim($this->attributes['email'])));
        return 'http://'.self::GRAVATAR_URL.'/avatar/'.$hash.'?s='.$size;
    }
}
