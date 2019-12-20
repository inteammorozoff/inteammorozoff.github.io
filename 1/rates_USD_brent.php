<?php
	$URL_BRENT = "https://pda.news.yandex.ru/quotes/1006.html";
	$URL_USD = 'https://query.yahooapis.com/v1/public/yql?q=select+*+from+yahoo.finance.xchange+where+pair+=+"USDRUB"&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=';

	$Response = file_get_contents($URL_BRENT);
	$Start_Pos = strpos($Response, '<span class="quote__sgn">');
	$Brent = substr($Response, $Start_Pos  + 32, 5);
	$Brent = str_replace(",", ".", $Brent);
	
	$Response = file_get_contents($URL_USD);
	$JSON = json_decode($Response);
	$USD =  $JSON->query->results->rate->Rate;


	echo number_format($USD, 2, '.', ''). " / ". $Brent;


?>
