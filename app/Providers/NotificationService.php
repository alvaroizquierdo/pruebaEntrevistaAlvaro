<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\ServiceProvider;

class NotificationService extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\NotificationHandler::class, function ($app) {
            return new \NotificationHandler();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function notify(User $user, $message){
        SmtpProvider::send($user._($message));
    }
}
