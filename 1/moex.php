<?php
//$language = 1;
$language = $_GET["language"] ;

$URL = "https://pda.news.yandex.ru/quotes/1013.html";
$response = file_get_contents($URL);
$Start_Pos = strpos($response, 'today');
$moex = str_replace(",", ".", substr($response, $Start_Pos+38, 7) );
switch ($language){
    case 1:
        echo "ММВБ: ". $moex;
        break;
    case 2:
        echo "MICEX: ". $moex;
        break;
    default:
        echo "MOEX: ". $moex;
}
?>