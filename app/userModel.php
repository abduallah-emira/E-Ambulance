<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{





    protected $guarded=[];
    public $fillable = [ 'name', 'age', 'gender','phone', 'address', 'email', 'nId','password','password_confirmation','t&c'];

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
