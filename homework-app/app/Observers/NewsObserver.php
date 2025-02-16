<?php

namespace App\Observers;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class NewsObserver {

    /**
     * Handle the News "saving" event.
     */
    public function saving(News $news): void {

        // Log::info('Created class NewsObserver - Saving');
        $news->slug = Str::slug($news->title);

    }

    /**
     * Handle the News "created" event.
     */
    public function created(News $news): void {
    }

    /**
     * Handle the News "updated" event.
     */
    public function updated(News $news): void {
    }

    /**
     * Handle the News "deleted" event.
     */
    public function deleted(News $news): void {
    }

    /**
     * Handle the News "restored" event.
     */
    public function restored(News $news): void {
    }

    /**
     * Handle the News "force deleted" event.
     */
    public function forceDeleted(News $news): void {
    }
}
