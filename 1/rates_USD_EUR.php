<?php

$URL_USD = 'https://query.yahooapis.com/v1/public/yql?q=select+*+from+yahoo.finance.xchange+where+pair+=+"USDRUB"&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=';
$URL_EUR = 'https://query.yahooapis.com/v1/public/yql?q=select+*+from+yahoo.finance.xchange+where+pair+=+"EURRUB"&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=';


$Response = file_get_contents($URL_USD);
$JSON = json_decode($Response);
$USD =  $JSON->query->results->rate->Rate;

$Response = file_get_contents($URL_EUR);
$JSON = json_decode($Response);
$EUR =  $JSON->query->results->rate->Rate;

echo number_format($USD, 2, '.', ''). " / ". number_format($EUR, 2, '.', '');

?>
