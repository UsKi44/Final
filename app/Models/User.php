<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{

    use Authenticatable;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password'
    ];
}
