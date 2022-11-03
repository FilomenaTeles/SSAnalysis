<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        Blade::directive('isAdmin', function (){
            return "<?php if (Auth::user() && Auth::user()-> user_type_id==1): ?>";
        });
        Blade::directive('endIsAdmin',function (){
            return "<?php endif; ?>";
        });
    }
}
