<?php

//match case

function get_weather_switch ($weather) {
    switch ($weather) {
        case "sunny":
            echo "It's sunny!";
            break;
        case "rainy":
            echo "It's rainy!";
            break;
        case "cloudy":
            echo "It's cloudy!";
            break;
        case "snowy":
            echo "It's snowy!";
            break;
        default:
            echo "No weather forecast available.";
    }
}

get_weather_switch("sunny");

//match case

function get_weather_match ($weather) {
    return match ($weather) {
        "sunny" => "It's sunny!",
        "rainy" => "It's rainy!",
        "cloudy" => "It's cloudy!",
        "snowy" => "It's snowy!",
        default => "No weather forecast available."
    };
}

?>