<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>SmartFace Timeline: Settings</title>

    <style type="text/css">
        @font-face {
            font-family: Imagine;
            src: url(imagineFont.ttf);
        }
        body {
            background-color: #000000;
        }
        .header {
            width: 95%;
            background: #ffffff;
            text-align: center;
            margin: 0 auto;
            padding: 10px 0px 0px 0px;
            font-size: 20px;
            font-family: Imagine;
        }
        .author {
            width: 95%;
            background: #ffffff;
            text-align: center;
            margin: 0 auto;
            padding: 0px 0px 10px 0px;
            font-size: 14px;
            font-family: Imagine;
        }
        .footer {
            width: 95%;
            background: #ffffff;
            text-align: center;
            margin: 0 auto;
            font-size: 14px;
            padding: 10px 0px 10px 0px;
            font-family: Imagine;
        }
        .block {
            text-align: center;
            width: 95%;
            background: #ffffff;
            margin: 0 auto;
            font-size: 14px;
            padding: 20px 0px 0px 0px;
            font-family: Imagine;
        }
        .block-text {
            display: inline-block;
            text-align: left;
            margin: 0 auto;
            padding: 0px 0px 0px 0px;
            font-size: 12px;
            width: 125px;
        }
        button {
            display: inline-block;
            margin: 0 auto;
            text-align: center;
            font-family: Imagine;
            width: 95%;
            background: #40c781;
            border: 1px;
            border-color: #25744C;
            padding: 1px;
            border-style: solid;
            font-size: 24px;
        }
        .block_header {
            text-align: center;
            width: 95%;
            background: #ffffff;
            margin: 0 auto;
            font-size: 16px;
            padding: 10px 0px 10px 0px;
            font-family: Imagine;
        }
        .settingsGroup {
            display: none;
        }
    </style>


</head>


<div class="header">
    SmartFace Timeline
</div>

<div class="author">
    by GrakovNe
</div>

<br> <br>

<br>

<div class="block_header" onclick="spoiler('generalSettings');">GENERAL SETTINGS</div>
<br>

<div id="generalSettings" class="settingsGroup">
    <div class="block">
        <div class="block-text">
            LANGUAGE:
        </div>
        <div class="block-text">
            <select id="language" style="width: 125px">
                <option value="0">ENGLISH</option>
                <option value="1">РУССКИЙ</option>
                <option value="2">DEUTSCH</option>
            </select>
        </div>
    </div>

    <div class="block">
        <div class="block-text">
            MAIN COLOR:
        </div>
        <div class="block-text">
            <select id="windowColor" style="width: 125px">
                <option value="0">WHITE</option>
                <option value="1">BLACK</option>
            </select>
        </div>
        <br><br>
    </div>
    <br><br>
</div>

<div class="block_header" onclick="spoiler('dateAndTime');">DATE AND TIME</div>
<br>

<div id="dateAndTime" class="settingsGroup">
    <div class="block">
        <div class="block-text">
            TEXT SIZE:
        </div>
        <div class="block-text">
            <select id="timeTextSize" style="width: 125px">
                <option value="0">NORMAL</option>
                <option value="1">LARGE</option>
            </select>
        </div>
    </div>

    <div class="block">
        <div class="block-text">
            BLINKING COLON:
        </div>
        <div class="block-text">
            <select id="blinkColon" style="width: 125px">
                <option value="0">DISABLED</option>
                <option value="1">ENABLED</option>
            </select>
        </div>
    </div>
    <div class="block">
        <div class="block-text">
            DATE FORMAT:
        </div>
        <div class="block-text">
            <select id="dateFormat" style="width: 125px">
                <option value="0">DD-MM-YYYY</option>
                <option value="1">DD-MMMM</option>
                <option value="2">MM/DD/YYYY</option>
            </select>
        </div>
    </div>

    <div class="block">
        <div class="block-text">
            DATE STYLE:
        </div>
        <div class="block-text">
            <select id="dateStyle" style="width: 125px">
                <option value="0">WEEKDAY ABOVE</option>
                <option value="1">WEEKDAY BELOW</option>
            </select>
        </div>
        <br> <br>
    </div>
    <br> <br>
</div>

<div class="block_header" onclick="spoiler('hideAndShow');">HIDE AND SHOW</div>
<br>

<div id="hideAndShow" class="settingsGroup">
    <div class="block">
        <div class="block-text">
            SHOW BATTERY TEXT:
        </div>
        <div class="block-text">
            <select id="showBatteryText" style="width: 125px">
                <option value="0">DISABLED</option>
                <option value="1">ENABLED</option>
            </select>
        </div>
    </div>

    <div class="block">
        <div class="block-text">
            SHOW BT TEXT:
        </div>
        <div class="block-text">
            <select id="showBluetoothText" style="width: 125px">
                <option value="0">DISABLED</option>
                <option value="1">ENABLED</option>
            </select>
        </div>
    </div>

    <div class="block">
        <div class="block-text">
            SHOW LAST DISCONNECT:
        </div>
        <div class="block-text">
            <select id="showLastDisconnectTime" style="width: 125px">
                <option value="0">DISABLED</option>
                <option value="1">ENABLED</option>
            </select>
        </div>
        <br><br>
    </div>
    <br><br>
</div>

<div class="block_header" onclick="spoiler('vibes');">VIBRATIONS</div>
<br>

<div id="vibes" class="settingsGroup">
    <div class="block">
        <div class="block-text">
            HOURLY VIBE:
        </div>
        <div class="block-text">
            <select id="vibeHourlyVibe" style="width: 125px">
                <option value="0">DISABLED</option>
                <option value="1">ENABLED</option>
            </select>
        </div>
    </div>

    <div class="block">
        <div class="block-text">
            BT VIBE:
        </div>
        <div class="block-text">
            <select id="vibeBluetoothStateChangeVibe" style="width: 125px">
                <option value="0">DISABLED</option>
                <option value="1">ENABLED</option>
            </select>
        </div>
        <br><br>
    </div>

    <br><br>
</div>

<div class="block_header" onclick="spoiler('localSettings');">LOCAL SETTINGS</div>
<br>

<div id="localSettings" class="settingsGroup">
    <div class="block">
        <div class="block-text">
            LOCATION:
        </div>
        <div class="block-text">
            <input type="text" id="weatherLocation" style="width: 125px" value=Omsk>
        </div>
    </div>

    <div class="block">
        <div class="block-text">
            TEMPERATURE UNITS:
        </div>
        <div class="block-text">
            <select id="weatherTemperatureUnits" style="width: 125px">
                <option value="C">CELSIUS</option>
                <option value="F">FAHRENHEIT</option>
            </select>
        </div>
        <br><br>
    </div>

    <br><br>

</div>

<div class="block_header" onclick="spoiler('AI');">SMART STRINGS</div>
<br>

<div id="AI" class="settingsGroup">
    <div class="block">
        <div class="block-text">
            TOP SMART STRING:
        </div>
        <div class="block-text">
            <select id="topAdditionalInfo" style="width: 125px">
                <option value="nothing">NOTHING</option>
                <option value="location">YOUR LOCATION</option>
                <option value="sunrise_sunset">SUNRISE AND SUNSET</option>
                <option value="openWeather">CURRENT WEATHER (OPEN WEATHER MAP)</option>
                <option value="yahooWeather">CURRENT WEATHER (YAHOO)</option>
                <option value="forecastThreeHours">WEATHER FORECAST (3 HOURS)</option>
                <option value="forecastSixHours">WEATHER FORECAST (6 HOURS)</option>
                <option value="forecastTwevleHours">WEATHER FORECAST (12 HOURS)</option>
                <option value="brentOil">BRENT OIL</option>
                <option value="dowJones">DJ INDEX</option>
                <option value="dax">DAX INDEX</option>
                <option value="moex">MOEX INDEX</option>
                <option value="rubUsbBrent">RUB/USD + BRENT</option>
                <option value="rubUsdRubEurMOEX">RUB/USD + RUB/EUR (MOEX)</option>
                <option value="rubUsdRubEurCBR">RUB/USD + RUB/EUR (BANK OF RUSSIA)</option>
                <option value="uahUsdUahEur">UAH/USD + UAH/EUR</option>
                <option value="customText">CUSTOM TEXT</option>
                <option value="serverTime">SERVER TIME</option>
            </select>
        </div>
    </div>

    <div class="block">
        <div class="block-text">
            TOP CUSTOM TEXT:
        </div>
        <div class="block-text">
            <input type="text" id="topAdditionalInfoCustomText" style="width: 125px" value=NONE>
        </div>
    </div>

    <div class="block">
        <div class="block-text">
            BOTTOM SMART STRING:
        </div>
        <div class="block-text">
            <select id="bottomAdditionalInfo" style="width: 125px">
                <option value="nothing">NOTHING</option>
                <option value="location">YOUR LOCATION</option>
                <option value="sunrise_sunset">SUNRISE AND SUNSET</option>
                <option value="openWeather">CURRENT WEATHER (OPEN WEATHER MAP)</option>
                <option value="yahooWeather">CURRENT WEATHER (YAHOO)</option>
                <option value="forecastThreeHours">WEATHER FORECAST (3 HOURS)</option>
                <option value="forecastSixHours">WEATHER FORECAST (6 HOURS)</option>
                <option value="forecastTwevleHours">WEATHER FORECAST (12 HOURS)</option>
                <option value="brentOil">BRENT OIL</option>
                <option value="dowJones">DJ INDEX</option>
                <option value="dax">DAX INDEX</option>
                <option value="moex">MOEX INDEX</option>
                <option value="rubUsbBrent">RUB/USD + BRENT</option>
                <option value="rubUsdRubEurMOEX">RUB/USD + RUB/EUR (MOEX)</option>
                <option value="rubUsdRubEurCBR">RUB/USD + RUB/EUR (BANK OF RUSSIA)</option>
                <option value="uahUsdUahEur">UAH/USD + UAH/EUR</option>
                <option value="customText">CUSTOM TEXT</option>
                <option value="serverTime">SERVER TIME</option>
            </select>
        </div>
    </div>

    <div class="block">
        <div class="block-text">
            BOTTOM CUSTOM TEXT:
        </div>
        <div class="block-text">
            <input type="text" id="bottomAdditionalInfoCustomText" style="width: 125px" value=NONE>
        </div>
    </div>

    <div class="block">
        <div class="block-text">
            REFRESH DATA:
        </div>
        <div class="block-text">
            <select id="dataUpdatesFrequency" style="width: 125px">
                <option value="30">NEVER</option>
                <option value="1">ONCE PER HOUR</option>
                <option value="2">TWICE PER HOUR</option>
                <option value="3">THREE TIMES PER HOUR</option>
                <option value="4">FOUR TIMES PER HOUR</option>
                <option value="5">FIVE TIMES PER HOUR</option>
            </select>
        </div>
        <br> <br>
    </div>
    <br><br>
</div>

<div class="block_header" onclick="spoiler('nightMode');">NIGHT MODE</div>
<br>

<div id="nightMode" class="settingsGroup">
    <div class="block">
        <div class="block-text">
            NIGHT MODE:
        </div>
        <div class="block-text">
            <select id="nightModeEnabled" style="width: 125px">
                <option value="0">DISABLED</option>
                <option value="1">ENABLED</option>
            </select>
        </div>
    </div>

    <div class="block">
        <div class="block-text">
            INVERT DISPLAY AT NIGHT:
        </div>
        <div class="block-text">
            <select id="nightModeDisplayInvert" style="width: 125px">
                <option value="0">DISABLED</option>
                <option value="1">ENABLED</option>
            </select>
        </div>
    </div>

    <div class="block">
        <div class="block-text">
            HOURLY VIBE AT NIGHT:
        </div>
        <div class="block-text">
            <select id="nightModeHourlyVibe" style="width: 125px">
                <option value="0">DISABLED</option>
                <option value="1">ENABLED</option>
            </select>
        </div>
    </div>

    <div class="block">
        <div class="block-text">
            BT VIBE AT NIGHT:
        </div>
        <div class="block-text">
            <select id="nightModeVibeOnEvent" style="width: 125px">
                <option value="0">DISABLED</option>
                <option value="1">ENABLED</option>
            </select>
        </div>
    </div>

    <div class="block">
        <div class="block-text">
            UPDATE INFO AT NIGHT:
        </div>
        <div class="block-text">
            <select id="nightModeUpdateInfo" style="width: 125px">
                <option value="0">DISABLED</option>
                <option value="1">ENABLED</option>
            </select>
        </div>
    </div>


    <div class="block">
        <div class="block-text">
            BLINK COLON AT NIGHT:
        </div>
        <div class="block-text">
            <select id="nightModeBlinkColon" style="width: 125px">
                <option value="0">DISABLED</option>
                <option value="1">ENABLED</option>
            </select>
        </div>
    </div>

    <div class="block">
        <div class="block-text">
            NIGHT BEGINS:
        </div>
        <div class="block-text">
            <input type="text" id="nightModeStarted" style="width: 125px" value=00:00>
        </div>
    </div>

    <div class="block">
        <div class="block-text">
            NIGHT ENDS:
        </div>
        <div class="block-text">
            <input type="text" id="nightModeFinished" style="width: 125px" value=08:00>
        </div>
        <br><br>
    </div>

</div>

<br> <br>

<div align=center>
    <button id="saveButton">SAVE AND CLOSE</button>
</div>

<br> <br>

<div class="footer">
    <b>Author</b>: <a href="http://grakovne.org/"> GrakovNe</a><br>
    <b>Translator</b>: <a href="mailto:Kat_nastya_1@mail.ru"> Akane</a><br><br>
    <a href="http://grakovne.org/donate-for-smartface/">donate for the project</a>
</div>

<script>
    function makeAdditionalString(index, value) {
        var result = " ";
        var language = document.getElementById("language");
        var weatherTemperatureUnits = document.getElementById("weatherTemperatureUnits");
        var weatherLocation = document.getElementById("weatherLocation");
        var topAdditionalInfoCustomText = document.getElementById("topAdditionalInfoCustomText");
        var bottomAdditionalInfoCustomText = document.getElementById("bottomAdditionalInfoCustomText");
        var timeOffset = -new Date().getTimezoneOffset();
        switch (value) {
            case "nothing":
                result = " ";
                break;
            case "openWeather":
                result = "http://grakovne.org/pebble/smartface_timeline/scripts/open_weather.php" + "?language=" + language.options[language.selectedIndex].value + "&location=" + weatherLocation.value.replace(/ /g, "_") + "&weather_units=" + weatherTemperatureUnits.options[weatherTemperatureUnits.selectedIndex].value;
                break;
            case "yahooWeather":
                result = "http://grakovne.org/pebble/smartface_timeline/scripts/yahoo_weather.php" + "?language=" + language.options[language.selectedIndex].value + "&location=" + weatherLocation.value.replace(/ /g, "_") + "&weather_units=" + weatherTemperatureUnits.options[weatherTemperatureUnits.selectedIndex].value;
                break;
            case "forecastThreeHours":
                result = "http://grakovne.org/pebble/smartface_timeline/scripts/weather_forecast_three_hours.php" + "?language=" + language.options[language.selectedIndex].value + "&location=" + weatherLocation.value.replace(/ /g, "_") + "&weather_units=" + weatherTemperatureUnits.options[weatherTemperatureUnits.selectedIndex].value;
                break;
            case "forecastSixHours":
                result = "http://grakovne.org/pebble/smartface_timeline/scripts/weather_forecast_six_hours.php" + "?language=" + language.options[language.selectedIndex].value + "&location=" + weatherLocation.value.replace(/ /g, "_") + "&weather_units=" + weatherTemperatureUnits.options[weatherTemperatureUnits.selectedIndex].value;
                break;
            case "forecastTwevleHours":
                result = "http://grakovne.org/pebble/smartface_timeline/scripts/weather_forecast_twelve_hours.php" + "?language=" + language.options[language.selectedIndex].value + "&location=" + weatherLocation.value.replace(/ /g, "_") + "&weather_units=" + weatherTemperatureUnits.options[weatherTemperatureUnits.selectedIndex].value;
                break;
            case "serverTime":
                result = "http://grakovne.org/pebble/smartface_timeline/scripts/current_time.php";
                break;
            case "location":
                result = weatherLocation.value;
                break;
            case "sunrise_sunset":
                result = "http://grakovne.org/pebble/smartface_timeline/scripts/sunrise_sunset.php?location=" + weatherLocation.value + "&time_offset=" + timeOffset;
                break;
            case "dowJones":
                result = "http://grakovne.org/pebble/smartface_timeline/scripts/dow_jones_index.php";
                break;
            case "brentOil":
                result = "http://grakovne.org/pebble/smartface_timeline/scripts/brent.php";
                break;
            case "rubUsbBrent":
                result = "http://grakovne.org/pebble/smartface_timeline/scripts/rates_USD_brent.php";
                break;
            case "rubUsdRubEurMOEX":
                result = "http://grakovne.org/pebble/smartface_timeline/scripts/rates_USD_EUR.php";
                break;
            case "moex":
                result = "http://grakovne.org/pebble/smartface_timeline/scripts/moex.php?language=" + language.options[language.selectedIndex].value;
                break;
            case "uahUsdUahEur":
                result = "http://grakovne.org/pebble/smartface_timeline/scripts/rates_UAH_USD_EUR.php";
                break;
            case "dax":
                result = "http://grakovne.org/pebble/smartface_timeline/scripts/dax_index.php";
                break;
            case "rubUsdRubEurCBR":
                result = "http://grakovne.org/pebble/smartface_timeline/scripts/rates_USD_EUR_russian_bank.php";
                break;
            case "customText":
                if (index == 0) {
                    result = topAdditionalInfoCustomText.value;
                }
                if (index == 1) {
                    result = bottomAdditionalInfoCustomText.value;
                }
        }
        return result;
    }
    function saveSettings() {
        var language = document.getElementById("language");
        var windowColor = document.getElementById("windowColor");
        var timeTextSize = document.getElementById("timeTextSize");
        var dateFormat = document.getElementById("dateFormat");
        var dateStyle = document.getElementById("dateStyle");
        var showBatteryText = document.getElementById("showBatteryText");
        var showBluetoothText = document.getElementById("showBluetoothText");
        var vibeHourlyVibe = document.getElementById("vibeHourlyVibe");
        var vibeBluetoothStateChangeVibe = document.getElementById("vibeBluetoothStateChangeVibe");
        var nightModeEnabled = document.getElementById("nightModeEnabled");
        var nightModeStarted = document.getElementById("nightModeStarted");
        var nightModeFinished = document.getElementById("nightModeFinished");
        var nightModeHourlyVibe = document.getElementById("nightModeHourlyVibe");
        var topAdditionalStringText = document.getElementById("topAdditionalInfo");
        var bottomAdditionalStringText = document.getElementById("bottomAdditionalInfo");
        var nightModeDisplayInvert = document.getElementById("nightModeDisplayInvert");
        var nightModeUpdateInfo = document.getElementById("nightModeUpdateInfo");
        var nightModeVibeOnEvent = document.getElementById("nightModeVibeOnEvent");
        var dataUpdatesFrequency = document.getElementById("dataUpdatesFrequency");
        var weatherTemperatureUnits = document.getElementById("weatherTemperatureUnits");
        var weatherLocation = document.getElementById("weatherLocation");
        var topAdditionalInfoCustomText = document.getElementById("topAdditionalInfoCustomText");
        var bottomAdditionalInfoCustomText = document.getElementById("bottomAdditionalInfoCustomText");
        var showLastDisconnectTime = document.getElementById("showLastDisconnectTime");
        var blinkColon = document.getElementById("blinkColon");
        var nightModeBlinkColon = document.getElementById("nightModeBlinkColon");
        var topAdditionalInfoURL = makeAdditionalString(0, topAdditionalStringText.options[topAdditionalStringText.selectedIndex].value);
        var bottomAdditionalInfoURL = makeAdditionalString(1, bottomAdditionalStringText.options[bottomAdditionalStringText.selectedIndex].value);
        options = {
            "language": language.options[language.selectedIndex].value,
            "windowColor": windowColor.options[windowColor.selectedIndex].value,
            "timeTextSize": timeTextSize.options[timeTextSize.selectedIndex].value,
            "dateFormat": dateFormat.options[dateFormat.selectedIndex].value,
            "dateStyle": dateStyle.options[dateStyle.selectedIndex].value,
            "showBatteryText": showBatteryText.options[showBatteryText.selectedIndex].value,
            "showBluetoothText": showBluetoothText.options[showBluetoothText.selectedIndex].value,
            "vibeHourlyVibe": vibeHourlyVibe.options[vibeHourlyVibe.selectedIndex].value,
            "vibeBluetoothStateChangeVibe": vibeBluetoothStateChangeVibe.options[vibeBluetoothStateChangeVibe.selectedIndex].value,
            "nightModeEnabled": nightModeEnabled.options[nightModeEnabled.selectedIndex].value,
            "nightModeStarted": nightModeStarted.value,
            "nightModeFinished": nightModeFinished.value,
            "nightModeHourlyVibe": nightModeHourlyVibe.options[nightModeHourlyVibe.selectedIndex].value,
            "topAdditionalStringURL": topAdditionalInfoURL,
            "bottomAdditionalStringURL": bottomAdditionalInfoURL,
            "nightModeDisplayInvert": nightModeDisplayInvert.options[nightModeDisplayInvert.selectedIndex].value,
            "nightModeUpdateInfo": nightModeUpdateInfo.options[nightModeUpdateInfo.selectedIndex].value,
            "nightModeVibeOnEvent": nightModeVibeOnEvent.options[nightModeVibeOnEvent.selectedIndex].value,
            "dataUpdatesFrequency": dataUpdatesFrequency.options[dataUpdatesFrequency.selectedIndex].value,
            "weatherTemperatureUnits": weatherTemperatureUnits.options[weatherTemperatureUnits.selectedIndex].value,
            "location": weatherLocation.value,
            "showLastDisconnectTime": showLastDisconnectTime.options[showLastDisconnectTime.selectedIndex].value,
            "nightModeBlinkColon": nightModeBlinkColon.options[nightModeBlinkColon.selectedIndex].value,
            "blinkColon": blinkColon.options[blinkColon.selectedIndex].value
        };
        localStorage["weatherLocation"] = weatherLocation.value;
        localStorage["weatherTemperatureUnits"] = options["weatherTemperatureUnits"];
        localStorage["dataUpdatesFrequency"] = options["dataUpdatesFrequency"];
        localStorage["nightModeVibeOnEvent"] = options["nightModeVibeOnEvent"];
        localStorage["nightModeUpdateInfo"] = options["nightModeUpdateInfo"];
        localStorage["nightModeDisplayInvert"] = options["nightModeDisplayInvert"];
        localStorage["topAdditionalStringText"] = topAdditionalStringText.options[topAdditionalStringText.selectedIndex].value;
        localStorage["bottomAdditionalStringText"] = bottomAdditionalStringText.options[bottomAdditionalStringText.selectedIndex].value;
        localStorage["nightModeHourlyVibe"] = options["nightModeHourlyVibe"];
        localStorage["nightModeStarted"] = options["nightModeStarted"];
        localStorage["nightModeFinished"] = options["nightModeFinished"];
        localStorage["nightModeEnabled"] = options["nightModeEnabled"];
        localStorage["vibeBluetoothStateChangeVibe"] = options["vibeBluetoothStateChangeVibe"];
        localStorage["vibeHourlyVibe"] = options["vibeHourlyVibe"];
        localStorage["showBluetoothText"] = options["showBluetoothText"];
        localStorage["showBatteryText"] = options["showBatteryText"];
        localStorage["dateFormat"] = options["dateFormat"];
        localStorage["dateStyle"] = options["dateStyle"];
        localStorage["timeTextSize"] = options["timeTextSize"];
        localStorage["windowColor"] = options["windowColor"];
        localStorage["language"] = options["language"];
        localStorage["topAdditionalInfoCustomText"] = topAdditionalInfoCustomText.value;
        localStorage["bottomAdditionalInfoCustomText"] = bottomAdditionalInfoCustomText.value;
        localStorage["showLastDisconnectTime"] = showLastDisconnectTime.value;
        localStorage["blinkColon"] = blinkColon.value;
        localStorage["nightModeBlinkColon"] = nightModeBlinkColon.value;
        return options;
    }
    var submitButton = document.getElementById("saveButton");
    submitButton.addEventListener("click",
            function () {
                console.log("Submit");
                var settings = saveSettings();
                var return_to = getQueryParam('return_to', 'pebblejs://close#');
                document.location = return_to + encodeURIComponent(JSON.stringify(settings));
            },
            false);
    function spoiler(string) {
        var activeSettingsGroup = document.getElementById(string);
        var previousState = activeSettingsGroup.style.display;
        var generalSettings = document.getElementById("generalSettings");
        var dateAndTime = document.getElementById("dateAndTime");
        var hideAndShow = document.getElementById("hideAndShow");
        var vibes = document.getElementById("vibes");
        var localSettings = document.getElementById("localSettings");
        var AI = document.getElementById("AI");
        var nightMode = document.getElementById("nightMode");
        generalSettings.style.display = "none";
        dateAndTime.style.display = "none";
        hideAndShow.style.display = "none";
        vibes.style.display = "none";
        localSettings.style.display = "none";
        AI.style.display = "none";
        nightMode.style.display = "none";
        activeSettingsGroup.style.display = previousState;
        if (activeSettingsGroup.style.display == "none" || activeSettingsGroup.style.display == "") {
            activeSettingsGroup.style.display = "block";
        }
        else {
            activeSettingsGroup.style.display = "none";
        }
    }
    function getQueryParam(variable, defaultValue) {
        // Find all URL parameters
        var query = location.search.substring(1);
        var vars = query.split('&');
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split('=');
            // If the query variable parameter is found, decode it to use and return it for use
            if (pair[0] === variable) {
                return decodeURIComponent(pair[1]);
            }
        }
        return defaultValue || false;
    }
    function readPreviouslySettings() {
        var language = document.getElementById("language");
        var windowColor = document.getElementById("windowColor");
        var timeTextSize = document.getElementById("timeTextSize");
        var dateFormat = document.getElementById("dateFormat");
        var dateStyle = document.getElementById("dateStyle");
        var showBatteryText = document.getElementById("showBatteryText");
        var showBluetoothText = document.getElementById("showBluetoothText");
        var vibeHourlyVibe = document.getElementById("vibeHourlyVibe");
        var vibeBluetoothStateChangeVibe = document.getElementById("vibeBluetoothStateChangeVibe");
        var nightModeEnabled = document.getElementById("nightModeEnabled");
        var nightModeStarted = document.getElementById("nightModeStarted");
        var nightModeFinished = document.getElementById("nightModeFinished");
        var nightModeHourlyVibe = document.getElementById("nightModeHourlyVibe");
        var topAdditionalStringText = document.getElementById("topAdditionalInfo");
        var bottomAdditionalStringText = document.getElementById("bottomAdditionalInfo");
        var nightModeDisplayInvert = document.getElementById("nightModeDisplayInvert");
        var nightModeUpdateInfo = document.getElementById("nightModeUpdateInfo");
        var nightModeVibeOnEvent = document.getElementById("nightModeVibeOnEvent");
        var dataUpdatesFrequency = document.getElementById("dataUpdatesFrequency");
        var weatherTemperatureUnits = document.getElementById("weatherTemperatureUnits");
        var weatherLocation = document.getElementById("weatherLocation");
        var topAdditionalInfoCustomText = document.getElementById("topAdditionalInfoCustomText");
        var bottomAdditionalInfoCustomText = document.getElementById("bottomAdditionalInfoCustomText");
        var showLastDisconnectTime = document.getElementById("showLastDisconnectTime");
        var blinkColon = document.getElementById("blinkColon");
        var nightModeBlinkColon = document.getElementById("nightModeBlinkColon");
        if (localStorage["language"]) {
            language.value = localStorage["language"];
        }
        if (localStorage["showLastDisconnectTime"]) {
            showLastDisconnectTime.value = localStorage["showLastDisconnectTime"];
        }
        if (localStorage["windowColor"]) {
            windowColor.value = localStorage["windowColor"];
        }
        if (localStorage["timeTextSize"]) {
            timeTextSize.value = localStorage["timeTextSize"];
        }
        if (localStorage["dateFormat"]) {
            dateFormat.value = localStorage["dateFormat"];
        }
        if (localStorage["nightModeBlinkColon"]) {
            nightModeBlinkColon.value = localStorage["nightModeBlinkColon"];
        }
        if (localStorage["dateStyle"]) {
            dateStyle.value = localStorage["dateStyle"];
        }
        if (localStorage["showBatteryText"]) {
            showBatteryText.value = localStorage["showBatteryText"];
        }
        if (localStorage["showBluetoothText"]) {
            showBluetoothText.value = localStorage["showBluetoothText"];
        }
        if (localStorage["vibeHourlyVibe"]) {
            vibeHourlyVibe.value = localStorage["vibeHourlyVibe"];
        }
        if (localStorage["vibeBluetoothStateChangeVibe"]) {
            vibeBluetoothStateChangeVibe.value = localStorage["vibeBluetoothStateChangeVibe"];
        }
        if (localStorage["nightModeEnabled"]) {
            nightModeEnabled.value = localStorage["nightModeEnabled"];
        }
        if (localStorage["nightModeStarted"]) {
            nightModeStarted.value = localStorage["nightModeStarted"];
        }
        if (localStorage["nightModeFinished"]) {
            nightModeFinished.value = localStorage["nightModeFinished"];
        }
        if (localStorage["nightModeHourlyVibe"]) {
            nightModeHourlyVibe.value = localStorage["nightModeHourlyVibe"];
        }
        if (localStorage["topAdditionalStringText"]) {
            topAdditionalStringText.value = localStorage["topAdditionalStringText"];
        }
        if (localStorage["bottomAdditionalStringText"]) {
            bottomAdditionalStringText.value = localStorage["bottomAdditionalStringText"];
        }
        if (localStorage["nightModeDisplayInvert"]) {
            nightModeDisplayInvert.value = localStorage["nightModeDisplayInvert"];
        }
        if (localStorage["nightModeUpdateInfo"]) {
            nightModeUpdateInfo.value = localStorage["nightModeUpdateInfo"];
        }
        if (localStorage["nightModeVibeOnEvent"]) {
            nightModeVibeOnEvent.value = localStorage["nightModeVibeOnEvent"];
        }
        if (localStorage["dataUpdatesFrequency"]) {
            dataUpdatesFrequency.value = localStorage["dataUpdatesFrequency"];
        }
        if (localStorage["weatherTemperatureUnits"]) {
            weatherTemperatureUnits.value = localStorage["weatherTemperatureUnits"];
        }
        if (localStorage["weatherLocation"]) {
            weatherLocation.value = localStorage["weatherLocation"];
        }
        if (localStorage["topAdditionalInfoCustomText"]) {
            topAdditionalInfoCustomText.value = localStorage["topAdditionalInfoCustomText"];
        }
        if (localStorage["bottomAdditionalInfoCustomText"]) {
            bottomAdditionalInfoCustomText.value = localStorage["bottomAdditionalInfoCustomText"];
        }
        if (localStorage["dataUpdatesFrequency"]) {
            dataUpdatesFrequency.value = localStorage["dataUpdatesFrequency"];
        }
        if (localStorage["blinkColon"]) {
            blinkColon.value = localStorage["blinkColon"];
        }
    }
    readPreviouslySettings();
</script>

</body>
</html>
