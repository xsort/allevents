<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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

    public function isManager(){
        // this looks if is manager in rights column in your users table
        if ($this->rights == 2) return true;
        return false;
    }

    public function isAdmin()
    {
        // this looks if is admin in rights column in your users table
        if ($this->rights == 1) return true;
        return false;
    }

    public function products(){
        return $this->belongsToMany('App\Models\Products', 'products_users', 'users_id', 'products_id')->withPivot('edited');
    }
}
