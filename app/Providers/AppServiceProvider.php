<?php

namespace App\Providers;

use App\Events\notification;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      \View::composer('dashboard.layout.main', function($view) {
            $notifications = \App\Models\notification::where('to',\Auth::user()->id)->where('read',0)->get();

            $view->with('notifications', array('notifications' => $notifications));
        });
    }
}
