<?php

class DatabaseController extends PDO
{
    public function __construct($dsn, $username, $password)
    {
        parent::__construct($dsn, $username, $password);
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}

class Connections {
    protected static $db = null;

    public static function getDatabase()
    {
        if (!self::$db) {
            // Database connection parameters
            $type = 'mysql';
            $server = '127.0.0.1';
            $db = 'BroadleighGardens';
            $port = '3306';
            $charset = 'utf8mb4';
            $username = 'root';
            $password = '';

            // DSN (Data Source Name)
            $dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset";

            try {
                self::$db = new DatabaseController($dsn, $username, $password);
            } catch (PDOException $e) {
                // Handle database connection error
                die("Connection failed: " . $e->getMessage());
            }
        }
        return self::$db;
    }
}

?>
