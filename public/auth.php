<?php

session_start();

include 'mysql.php';

if(!isset($_POST['username'], $_POST['password'])) {
    die('Username and/or password does not exist.');
}

try {
  $pdo = new PDO($dsn, $user, $pass, $options);
  $stmt = $pdo->prepare('SELECT id, password FROM accounts WHERE username = ?');
  $stmt->bindValue(1, $_POST['username']);
  $stmt->execute();
  if($stmt->rowCount() > 0) {
    while($row = $stmt->fetch()) {
      echo $row['id'] . $row['password'];
    }
  }
} catch(PDOException $e) {
  throw new PDOException($e->getMessage(), (int)$e->getCode());
}

?>