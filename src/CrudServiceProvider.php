<?php

namespace Fallah\Crud;

use Illuminate\Support\ServiceProvider;

class CrudServiceProvider  extends ServiceProvider
{
    public function register()
    {
//         $this->app->bind('crud',function (){
//             return new Crud;
//         });

        $this->app->bind('crud');

        $this->mergeConfigFrom(__DIR__.'\config.php','crud');
    }
    public function boot(){
        require __DIR__.'\routes.php';
        $this->loadViewsFrom(__DIR__.'/views','crud');

        $this->publishes([
            __DIR__.'/config.php'=>config_path('crud.php'),
            __DIR__.'/views'=>base_path('resources/views/crud') ,
            __DIR__.'/Migrations'=>database_path('migrations')
        ]);
    }

}
