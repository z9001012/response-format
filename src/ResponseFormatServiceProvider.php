<?php

namespace Zone\ResponseFormat;;

use Illuminate\Support\ServiceProvider;

class ResponseFormatServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__ . '/routes/routes.php';

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('zone-response-format',function(){
            return new ResponseFormat();
        });
    }
}
