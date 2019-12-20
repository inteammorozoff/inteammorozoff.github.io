<?php

$URL_UAH_USD = 'https://query.yahooapis.com/v1/public/yql?q=select+*+from+yahoo.finance.xchange+where+pair+=+"USDUAH"&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=';
$Response = file_get_contents($URL_UAH_USD);
$JSON = json_decode($Response);
$USD =  $JSON->query->results->rate->Rate;

$URL_UAH_EUR = 'https://query.yahooapis.com/v1/public/yql?q=select+*+from+yahoo.finance.xchange+where+pair+=+"EURUAH"&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=';
$Response = file_get_contents($URL_UAH_EUR);
$JSON = json_decode($Response);
$EUR =  $JSON->query->results->rate->Rate;

echo number_format($USD, 2, '.', ''). " / ". number_format($EUR, 2, '.', '');

?>
