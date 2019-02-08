<?php

abstract class PDORepository {
    const USERNAME = 'root';
    const PASSWORD = 'kamiken5454mariadb';
    const HOST = '192.168.11.107';
    const PORT = '3307';
    const DB = 'observer';
    const CHARSET = 'utf8mb4';

    private function getConnection() {
        $username = self::USERNAME;
        $password = self::PASSWORD;
        $host = self::HOST;
        $port = self::PORT;
        $db = self::DB;
        return new PDO("mysql:dbname=$db;host=$host:$port", $username, $password);
    }
}


$dsn = "mysql:host=$host:$port;dbname=$db;charset=$charset";
$options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES => false,
];