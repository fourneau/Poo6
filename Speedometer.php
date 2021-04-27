<?php

class Speedometer
{
    public const kmMiles = 0.621;

    public static function convertKmToMiles(int $distance): string
    {

        return $distance * self::kmMiles . " miles" . "\n";
    }

    public static function convertMilesToKm(int $distance): string
    {

        return $distance / self::kmMiles . " km" . "\n";
    }
}