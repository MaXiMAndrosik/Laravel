<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use App\Events\NewsHidden;
use App\Listeners\NewsHiddenListener;
use App\Models\News;
use App\Observers\NewsObserver;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void {

        $this->app->singleton(NewsHidden::class, function () {
            return new NewsHidden(DB::table('news'));
        });

        $this->app->singleton(NewsHiddenListener::class, function () {
            return new NewsHiddenListener();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void {
        News::observe(NewsObserver::class);
    }
}
