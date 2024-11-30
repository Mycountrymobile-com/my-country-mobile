<?php

namespace MyCountryMobile;

use GuzzleHttp\Client;
use Psr\Log\LoggerInterface;

class SmsService
{
    protected $client;
    protected $apiKey;
    protected $apiUrl;
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->client = new Client();
        $this->apiKey = getenv('********_API_KEY'); // Use environment variables for security
        $this->apiUrl = getenv('********_API_URL');
        $this->logger = $logger;
    }

    public function sendSms($to, $message)
    {
        try {
            $response = $this->client->post($this->apiUrl, [
                'json' => [
                    'apiKey' => $this->apiKey,
                    'to' => $to,
                    'message' => $message,
                ]
            ]);

            // Log the response from the SMS API
            $this->logger->info("SMS sent to {$to}: {$message}");
            return $response->getBody();
        } catch (\Exception $e) {
            $this->logger->error("Error sending SMS: " . $e->getMessage());
            return null;
        }
    }
}
