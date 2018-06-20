<?php



require "vendor/autoload.php";

$access_token = 'HckYQU7o6y6Fbtm886GA4qLdAaO3Ik3Ho657LkWiNvC+J4Xa+YBWOZhPDGR2fhvZihfOrlPAosEfgQdwOF3DQHd5Jhc6GWFALc5o9FC/zDLPWN5+UrSwqhNxwgquDAfuxnENMA/US/jFpQy4l/NB8QdB04t89/1O/w1cDnyilFU=';

$channelSecret = '94e66132b96668684e75bdfabfbf5e25';

$pushID = 'U94bba7c9fec1fcf365b3baec28004f49';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('สวัสดี');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







