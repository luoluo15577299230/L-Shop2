<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

//用户注册
use App\Listeners\RegisteredListener;
use Illuminate\Auth\Events\Registered;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    // protected $listen = [
    //     'App\Events\Event' => [
    //         'App\Listeners\EventListener',
    //     ],
    // ];
    
    /*
        用户注册监听器关联
        @var array*/
    protected $listen = [
        Registered::class => [
            RegisteredListener::class,
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

        //
    }
}
