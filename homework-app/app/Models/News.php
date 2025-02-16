<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class News extends Model {
    protected $fillable = ['title', 'slug', 'body', 'hidden'];

    // protected static function boot() {

    //     parent::boot();

    //     static::created(function (News $news) {
    //         Log::info('Created class News');
    //     });
        
    // }
    
}
