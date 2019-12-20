<?php
$DAX = "https://www.quandl.com/api/v1/datasets/YAHOO/INDEX_GDAXI.json?trim_start=2015-08-20";
$response = file_get_contents($DAX);
$JSON = json_decode($response);
echo round($JSON->data[0][1]). " / ". round($JSON->data[0][6]);
?>