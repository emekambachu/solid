<?php

namespace App\Providers;

use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use PhpOption\None;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        User::created(function($user)
        {
            $user->id;
            $user->referer;

            $getReferer = User::where([
                ['username', '=', $user->referer],
            ])->get()->first()->first;

            if(empty($getReferer->left)){
                $getReferer->left = $user->username;
                $getReferer->save();
            }elseif(empty($getReferer->right)){
                $getReferer->right = $user->username;
                $getReferer->save();
            }else{

            }
        });
    }
}
