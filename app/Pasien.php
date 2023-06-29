<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pasien extends Authenticatable
{
    use Notifiable;

    protected $table = 'pasien';
    protected $guard = 'pasien';
    public $primaryKey = 'noUser';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password'
    ];

    // public function getAuthPassword()
    // {
    //     return $this->user_pass;
    // }

    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = Hash::make($value);
    // }
    
    // User->password = Input::get('password');
    // User->save();

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
