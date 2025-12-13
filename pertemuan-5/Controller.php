<?php

class BaseController
{
    public static function route(): void
    {
        echo "Routing di BaseController\n";
    }

    // Menggunakan Late Static Binding
    public static function handleStatic(): void
    {
        static::route();
    }

    // Menggunakan Static Binding biasa
    public static function handleSelf(): void
    {
        self::route();
    }
}

class UserController extends BaseController
{
    public static function route(): void
    {
        echo "Routing di UserController\n";
    }
}

class AdminController extends UserController
{
    public static function route(): void
    {
        echo "Routing di AdminController\n";
    }
}



echo "=== static:: ===\n";
AdminController::handleStatic();

echo "\n=== self:: ===\n";
AdminController::handleSelf();
