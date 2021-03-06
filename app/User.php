<?php

namespace App;

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
        'name', 'email', 'password', 'role'
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

    /**
     * Relationship between User and Recipe
     * Given a user, return their recipes
     *
     * @return void
     */
    public function recipes()
    {
        return $this->hasMany('App\Recipe');
    }

    /**
     * Check if a user is an admin
     *
     * @return boolean
     */
    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}
