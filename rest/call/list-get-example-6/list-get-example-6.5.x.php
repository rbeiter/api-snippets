<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once '/path/to/vendor/autoload.php'; // Loads the library
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$token = "your_auth_token";
$client = new Client($sid, $token);

$calls = $client->account->calls->read(
    array("status" => "busy", "to" => "+15558675309"),
    50
);
// Loop over the list of calls and echo a property for each one
foreach ($calls as $call) {
    echo $call->startTime->format('Y-m-d H:i:s');
}
