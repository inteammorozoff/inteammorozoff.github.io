<?php
$language = $_GET["language"];
$weather_units = $_GET["weather_units"];
$location = $_GET["location"];

//$language = '1';
//$weather_units = 'C';
//$location = 'Omsk';
$seconds_in_hour = 3600;

$api_key = 'ba08e74fcb7da39750070a88a2ab8a9b';
$url_address = 'http://api.openweathermap.org/data/2.5/forecast';

$url_for_request = $url_address . '?q=' . "\"" . $location . "\"" . '&APPID=' . $api_key;
$response = json_decode(file_get_contents($url_for_request));


$forecast_list = $response->list;

$current_time = mktime();

foreach ($forecast_list as $current_forecast){
    $forecast_time = $current_forecast->dt;

    if (($forecast_time - $current_time) > 12 * $seconds_in_hour){
        parse_forecast($current_forecast);
        break;
    }
}

function parse_forecast($forecast)
{
    $temperature = $forecast->main->temp - 273.15;
    $weather_conditions = $forecast->weather[0]->main;

    if ($GLOBALS['weather_units'] == "F") {
        $temperature = 1.8 * $temperature + 32;
    }

    $temperature = sprintf("%+0.1f", $temperature);

    if ($GLOBALS['language'] == "1")
        switch ($weather_conditions) {
            case "Storm":
                $weather_conditions = "Гроза";
                break;
            case "Drizzle":
                $weather_conditions = "Морось";
                break;
            case "Rain":
                $weather_conditions = "Дождь";
                break;
            case "Snow":
                $weather_conditions = "Снег";
                break;
            case "Smoke":
                $weather_conditions = "Туман";
                break;
            case "Clouds":
                $weather_conditions = "Облачно";
                break;
            case "Extreme":
                $weather_conditions = "Шторм";
                break;
            case "Clear":
                $weather_conditions = "Ясно";
                break;
            case "Fog":
                $weather_conditions = "Дымка";
                break;
            case "Mist":
                $weather_conditions = "Туман";
                break;
            default:
                $weather_conditions = "Облачно";
        }

    if ($GLOBALS['language'] == 2) {
        switch ($weather_conditions) {
            case "Storm":
                $weather_conditions = "Sturm";
                break;
            case "Drizzle":
                $weather_conditions = "Reif";
                break;
            case "Rain":
                $weather_conditions = "Regen";
                break;
            case "Snow":
                $weather_conditions = "Schnee";
                break;
            case "Smoke":
                $weather_conditions = "Nebel";
                break;
            case "Clouds":
                $weather_conditions = "bewölkt";
                break;
            case "Extreme":
                $weather_conditions = "Sturm";
                break;
            case "Clear":
                $weather_conditions = "klar";
                break;
            case "Fog":
                $weather_conditions = "Dunst";
                break;
            case "Mist":
                $weather_conditions = "Nebel";
                break;
            default:
                $weather_conditions = "bewölkt";
        }
    }

    echo $weather_conditions . ", " . $temperature . $GLOBALS['weather_units'];
}
