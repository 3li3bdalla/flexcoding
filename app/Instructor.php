<?php

namespace App;


// to be added latter
use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Relashionships\InstructorRelashionships;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Instructor extends Authenticatable 
{
    //

    use InstructorRelashionships;


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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



}
