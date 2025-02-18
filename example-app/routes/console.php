<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades\Log;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::call(function () {
    Log::info('Callback scheduled');
})->everyMinute();

Schedule::command('app:dump-database')->everyMinute();

Schedule::job(new App\Jobs\SyncNews(10))->everyMinute();

Schedule::exec("New-Item -Path '" . __DIR__ . "\\file.log' -ItemType File")->everyMinute();