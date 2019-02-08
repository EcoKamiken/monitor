<?php

session_start();

include 'mysql.php';

if(!isset($_POST['username'], $_POST['password'])) {
    die('Username and/or password does not exist.');
}

try {
  $pdo = new PDO($dsn, $user, $pass, $options);
  $stmt = $pdo->query('SELECT * FROM sites ORDER BY grp, serial_number');
} catch(PDOException $e) {
  throw new PDOException($e->getMessage(), (int)$e->getCode());
}

?>