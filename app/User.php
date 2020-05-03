<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'confirmation_code', 'type', 'bio', 'photo',
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


    public function personal()
    {
        return $this->hasOne(Personal::class);

    }
    /* 
    public function personalinformation()
    {
        return $this->hasOne(PersonalInformation::class);

    }
    public function education()
    {
        return $this->hasOne(Education::class);

    }
    public function experience()
    {
        return $this->hasOne(Experience::class);

    }

    public function conclusion()
    {
        return $this->hasOne(Conclusion::class);

    }
    public function profissional()
    {
        return $this->hasOne(Profissional::class);

    } */
}
