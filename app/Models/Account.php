<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;


class Account extends Model implements Authenticatable
{
    use AuthenticableTrait;

    protected $table = 'account';

    protected $fillable = [
        'username',
        'password',
        'name',
        'role'
    ];

    public $timestamps = false;
}
