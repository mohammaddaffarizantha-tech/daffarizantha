<?php
class Config
{
    protected static string $timezone = "Asia/Jakarta";

    // Menggunakan Late Static Binding
    public static function getTimezoneStatic(): string
    {
        return static::$timezone;
    }

    // Menggunakan self::
    public static function getTimezoneSelf(): string
    {
        return self::$timezone;
    }
}

class ConfigDev extends Config
{
    protected static string $timezone = "UTC";
}



echo "static::\n";
echo Config::getTimezoneStatic() . "\n";
echo ConfigDev::getTimezoneStatic() . "\n";

echo "\nself::\n";
echo Config::getTimezoneSelf() . "\n";
echo ConfigDev::getTimezoneSelf() . "\n";
