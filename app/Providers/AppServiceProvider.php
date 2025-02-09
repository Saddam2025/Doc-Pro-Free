<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Console\Scheduling\Schedule;

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
    public function boot(Schedule $schedule): void
    {
        // Remove sitemap scheduling if not needed
        // If you want to keep it, uncomment the code below.
        
        /*
        $schedule->command('sitemap:generate')
            ->hourly()
            ->onSuccess(function () {
                \Log::info('Sitemap generation succeeded at ' . now());
            })
            ->onFailure(function () {
                \Log::error('Sitemap generation failed at ' . now());
            });
        */
    }
}
