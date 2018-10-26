<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Notifications\EmailVerificationNotification;
use Illuminate\Auth\Events\Registered; 
    // 用户注册时触发 Illuminate\Auth\Events\Registered 事件

// implements ShouldQueue 让这个监听器异步执行
class RegisteredListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /** 当事件被触发时，对应该事件的监听器的 handle() 方法会被调用
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //获取到刚注册的用户信息
        $user = $event->user;
        //调用 notify 发送通知
        $user->notify(new EmailVerificationNotification());
    }
}
