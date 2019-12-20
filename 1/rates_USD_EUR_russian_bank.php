<?php
$URL = "http://cbr.ru/scripts/XML_daily.asp?date_req=". date("d/m/Y");
$response = file_get_contents($URL);

$xml = simplexml_load_string($response);
$USD =  str_replace(",", ".", $xml->Valute[9]->Value);
$EUR =  str_replace(",", ".", $xml->Valute[10]->Value);
echo round($USD, 2). " / ". round($EUR, 2);
?>