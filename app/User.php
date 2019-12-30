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

        'level_id',
        'image_id',
        'is_active',
        'firstname',
        'lastname',
        'username',
        'referer',
        'email',
        'password',
        'mobile',
        'state',
        'address',
        'nokname',
        'nokmobile',
        'accname',
        'bank',
        'accnum',
        'payopt',
        'feename',
        'feenum',
        'slipnum',
        'prefbank',
        'balance',
        'left',
        'right'

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

    public function image(){
        return $this->belongsTo(Image::class);
    }

    public function level(){
        return $this->belongsTo(Level::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
}
