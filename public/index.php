<?php

require_once '../vendor/autoload.php';

use MyCountryMobile\SmsService;
use MyCountryMobile\User;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Create the logger
$logger = new Logger('app');
$logger->pushHandler(new StreamHandler('logs/app.log', Logger::DEBUG));

// Create an SMS service instance
$smsService = new SmsService($logger);

// Example of sending an SMS (In real-world, you'd capture this from a form or API)
$user = new User(1, 'John Doe', '+1234567890');
$message = 'Hello from My Country Mobile!';

// Send SMS
$response = $smsService->sendSms($user->phone, $message);

// Show result on the page
if ($response) {
    echo "<h1>Message Sent Successfully</h1>";
} else {
    echo "<h1>Failed to Send Message</h1>";
}
