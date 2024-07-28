<?php

namespace Modules\Users\Providers;

use Illuminate\Support\ServiceProvider;

/*
|--------------------------------------------------------------------------
| User Module Provider
|--------------------------------------------------------------------------
|
| Here is where you can register and boot all of the Provider for an user module.
|
*/

class UserServiseProvider extends ServiceProvider
{
     /**
     * Register any application services.
     * 
     * @return void
     */
    public function register():void
    {
        $this->loadRoutesFrom(__DIR__ ."/../routes/user_routes.php");
    }

     /**
     * boot any application services.
     * 
     * @return void
     */
    public function boot():void
    {

    }
    
}
