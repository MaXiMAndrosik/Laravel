<?php

namespace App\Http\Controllers;

use App\Services\CustomLogServiceInterface;
use App\Services\SmsServiceInterface;
use Illuminate\Http\Request;

class TestDiController extends Controller {

    public function showUrl(Request $request, CustomLogServiceInterface $customLog) {

        echo $request->getUri();

        $customLog->rotateLogs();
    }

    public function sendSms(SmsServiceInterface $sender) {

        $sender->send('Your message goes here');

        echo 'SMS sent successfully';

    }
    
}
