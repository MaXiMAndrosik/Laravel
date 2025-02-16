<?php

namespace App\Services;

use Twilio\Rest\Client as TwilioClient;

class SmsSenderService implements SmsServiceInterface {

    protected $client;

    /**
     * Class constructor.
     */
    public function __construct($sid, $token)
    {
        $this->client = new TwilioClient($sid, $token);
    }

    public function send($message) {

        $this->client->messages->create(
            '+375295523257',
            [
                'from' => '+18573418723',
                'body' => $message,
            ]
        );

    }

}