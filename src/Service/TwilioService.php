<?php

namespace App\Service;

use Twilio\Rest\Client;

class TwilioService
{
    private Client $client;
    private string $fromNumber;

    public function __construct(
        string $twilioAccountSid,
        string $twilioAuthToken,
        string $twilioFromNumber
    ) {
        $this->client = new Client($twilioAccountSid, $twilioAuthToken);
        $this->fromNumber = $twilioFromNumber;
    }

    public function sendWhatsAppOtp(string $phoneNumber, string $otp): void
    {
        $this->client->messages->create(
            'whatsapp:' . $phoneNumber,
            [
                'from' => 'whatsapp:' . $this->fromNumber,
                'body' => "Votre code de vérification est : $otp"
            ]
        );
    }
}