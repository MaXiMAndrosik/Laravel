<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use App\Models\News;

class NewsHidden {

    use Dispatchable, SerializesModels;

    public $news;

    /**
     * Create a new event instance.
     */
    public function __construct($news) {
        $this->news = $news;
        // Log::info('Created class NewsHidden');
    }

}
