<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class News extends Model {

    protected $fillable = [
        'title',
        'slug',
        'body'
    ];

    // protected static function boot() {

    //     parent::boot();

    //     static::updating(function (News $news) {
    //         Log::info('Updating news ' . $news->title);
    //     });
        
    // }

}
