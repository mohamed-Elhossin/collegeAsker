<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (!User::where('email', '=', 'admin@admin.com')->exists()) {
            User::create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
            ]);
        }
    }
}
