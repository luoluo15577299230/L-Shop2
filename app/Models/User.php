<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','email_verified',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /* 
        $casts is a function that convert MSQL fields to common data types, like:
            integer, real, float, double, string, booleam, object, arry, collection, date, datetime and timestamp.
    */
    protected $casts = [
        'email_verified' => 'boolean',
    ];
} 
