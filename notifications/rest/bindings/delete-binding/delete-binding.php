<?php
// NOTE: This example uses the next generation Twilio helper library - for more
// information on how to download and install this version, visit
// https://www.twilio.com/docs/libraries/php
require './vendor/autoload.php';

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"; 
$token = "your_auth_token"; 

// Initialize the client
$client = new Twilio\Rest\Client($sid, $token);

$service = $client->notifications->v1->services("ISxxx");

$response = $service->bindings("BSxxx")->delete();

print $response;
 