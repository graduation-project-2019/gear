<?php

namespace App;

 //use Illuminate\Database\Eloquent\Model;
 use Illuminate\Notifications\Notifiable;
 use Illuminate\Contracts\Auth\MustVerifyEmail;
 use Illuminate\Foundation\Auth\User as Authenticatable;

class admin extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guard = 'admin';//keda hy5aly el defualt guard bta3i admin

    protected $fillable = [
        'name', 'email', 'password','mobile',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
