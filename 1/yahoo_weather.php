<?php
$language = $_GET["language"] ;
$weather_units = $_GET["weather_units"] ;
$location = $_GET["location"];


/*$language = '1';
$weather_units = 'F';
$location = 'tula'; */


$condition_codes = array(
    array(
        "tornado",
        "storm",
        "storm",
        "storm",
        "storm",
        "rain",
        "rain",
        "show",
        "drizzle",
        "drizzle",
        "rain",
        "rain",
        "rain",
        "blizzard",
        "show",
        "show",
        "snow",
        "hail",
        "show",
        "dust",
        "fog",
        "haze",
        "smoke",
        "storm",
        "wind",
        "cold",
        "clouds",
        "clouds",
        "clouds",
        "clouds",
        "clouds",
        "clear",
        "sun",
        "fair",
        "fair",
        "rain",
        "hot",
        "storm",
        "storm",
        "storm",
        "rain",
        "snow",
        "rain",
        "snow",
        "clouds",
        "storm",
        "blizzard",
        "storm"
    ),
    array(
        "торнадо",
        "шторм",
        "шторм",
        "шторм",
        "гроза",
        "дождь",
        "дождь",
        "снег",
        "морось",
        "морось",
        "дождь",
        "дождь",
        "дождь",
        "буря",
        "снег",
        "снег",
        "снег",
        "град",
        "cнег",
        "пыль",
        "туман",
        "мгла",
        "дымка",
        "буря",
        "ветер",
        "мороз",
        "облачно",
        "облачно",
        "облачно",
        "облачно",
        "облачно",
        "ясно",
        "ясно",
        "отлично",
        "отлично",
        "дождь",
        "жара",
        "гроза",
        "гроза",
        "гроза",
        "дождь",
        "снег",
        "дождь",
        "снег",
        "облачно",
        "гроза",
        "вьюга",
        "гроза"
    ),
    array(
        "Tornado",
        "Sturm",
        "Sturm",
        "Sturm",
        "Sturm",
        "Regen",
        "Regen",
        "Schnee",
        "Reif",
        "Reif",
        "Regen",
        "Regen",
        "Regen",
        "Sturm",
        "Schnee",
        "Schnee",
        "Schnee",
        "Hagel",
        "Schnee",
        "Staub",
        "Nebel",
        "Dunst",
        "Dunst",
        "Sturm",
        "Wind",
        "Frost",
        "trübe",
        "trübe",
        "trübe",
        "trübe",
        "trübe",
        "klar",
        "klar",
        "super",
        "super",
        "Regen",
        "Hitze",
        "Sturm",
        "Sturm",
        "Sturm",
        "Regen",
        "Schnee",
        "Regen",
        "Schnee",
        "trübe",
        "Sturm",
        "Schnee",
        "Sturm"
    )
);

$url_address = "https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20in%20(select%20woeid%20from%20geo.places(1)%20where%20text%3D\"". $location. "\")&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys";

$response = json_decode(file_get_contents($url_address));

$temperature = $response->query->results->channel->item->condition->temp;

if ($weather_units == 'C') {
    $temperature = round((5 / 9) * ($temperature - 32));
}

$temperature = sprintf("%+d", $temperature);

$condition_code = $response->query->results->channel->item->condition->code;

echo $condition_codes[$language][$condition_code]. ", ". $temperature. $weather_units;
?>