<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Log;
use Symfony\Component\HttpFoundation\Response;

class DataLogger {

    private $start_time;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $this->start_time = microtime(true);
        return $next($request);
    }

    public function terminate(Request $request, Response $response) {

        if (env('API_DATALOGGER', true)) {
            if (env('API_DATALOGGER_USER_DB', true)) {}

            $end_time = microtime(true);
            $log = new Log();
            $log->time = gmdate('Y-m-d  H:i:s');
            $log->duration = number_format($end_time - LARAVEL_START, 3);
            $log->ip = $request->ip();
            $log->url = $request->fullUrl();
            $log->method = $request->method();
            $log->input = $request->getContent();

            // var_dump($log);


            $log->save();

        } else {

            $end_time = microtime(true);
            $fileName = 'api_dataLogger_' . date('d-m-y') . '.log';
            $dataToLog = 'Time: ' . gmdate('Y-m-d  H:i:s') . '\n';
            $dataToLog .= 'Duration: ' . number_format($end_time - LARAVEL_START, 3) . '\n';
            $dataToLog .= 'IP Address: ' . $request->ip() . '\n';
            $dataToLog .= 'URL: ' . $request->fullUrl() . '\n';
            $dataToLog .= 'Method: ' . $request->method() . '\n';
            $dataToLog .= 'Input: ' . $request->getContent() . '\n';

            var_dump($dataToLog);

            Storage::write(storage_path('logs'. DIRECTORY_SEPARATOR . $fileName), $dataToLog . '\n' . str_repeat('-',20) . '\n\n');

        }

    }

}
