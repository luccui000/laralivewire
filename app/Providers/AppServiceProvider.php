<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

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
        //
        Builder::macro('search', function ($attribute, $searchTerm) {
            return $this->where($attribute, 'LIKE', "%{$searchTerm}%");
        });
        Password::default(function () {
           return Password::min(6)
               ->letters()
               ->mixedCase()
               ->symbols()
               ->numbers()
               ->uncompromised();
        });
    }
}
