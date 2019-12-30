<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'amount',
        'balance',
        'description',
        'requested',
        'collected',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
