<?php
require(__DIR__ . '/../common/env.php');

class DB
{
    public static function db_connect() {
        $connection = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME']);
        if (!$connection) {
            // Display message and terminate script
            die("Connection failed: " . mysqli_connect_error());
        }
        return $connection;
    }
}