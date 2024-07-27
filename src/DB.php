<?php

declare(strict_types=1);

class DB
{
    public static function connect(): PDO
    {
        return  new PDO("{$_ENV['DB_CONNECTION']}:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']};user={$_ENV['DB_USERNAME']};password={$_ENV['DB_PASSWORD']}");
    }
}
