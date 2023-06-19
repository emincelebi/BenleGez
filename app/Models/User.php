<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';

    protected $fillable = [
        'name',
        'surname',
        'nickname',
        'email',
        'password',
        'gender',
        'role',
    ];

    protected $hidden = [
        'password',
    ];

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

}

