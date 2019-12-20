<?php $DOW_JONES = "https://www.quandl.com/api/v1/datasets/YAHOO/INDEX_DJI.json?trim_start=2015-08-20";
$Response = file_get_contents($DOW_JONES);
$JSON = json_decode($Response);
echo round($JSON->data[0][1]). " / ". round($JSON->data[0][6]);
?>
