<?php
$location = $_GET["location"];
$time_offset = $_GET["time_offset"];

$api_key = 'ba08e74fcb7da39750070a88a2ab8a9b';
$url_address = 'http://api.openweathermap.org/data/2.5/weather';

$url_for_request = $url_address. '?q='. "\"". $location. "\"". '&APPID='. $api_key;
$response = $json = json_decode(file_get_contents($url_for_request));

$sunrise_time =  $response->sys->sunrise + $time_offset * 60;
$sunset_time =  $response->sys->sunset + $time_offset * 60;

$sunrise = new DateTime("@$sunrise_time");
$sunset = new DateTime("@$sunset_time");
echo $sunrise->format('H:i'). " / ". $sunset->format('H:i');

?>