<?php
$host = '192.168.11.107';
$port = '3307';
$db = 'observer';
$user = 'root';
$pass = 'kamiken5454mariadb';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host:$port;dbname=$db;charset=$charset";
$options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES => false,
];