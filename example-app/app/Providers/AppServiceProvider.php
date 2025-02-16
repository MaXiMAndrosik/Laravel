<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use App\Services\SmsServiceInterface;
use App\Services\SmsSenderService;
use App\Models\News;
use App\Observers\NewsObserver;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(SmsServiceInterface::class, function() {
            return new SmsSenderService('q346567', 'afdhgvg');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {
        News::observe(NewsObserver::class);
    }
}
