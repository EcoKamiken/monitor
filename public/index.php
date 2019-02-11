<?php
include 'templates/header.php';
include 'mysql.php';

try {
  $pdo = new PDO($dsn, $user, $pass, $options);
  $stmt = $pdo->query('SELECT * FROM sites ORDER BY grp, serial_number');
  echo "<pre>";
  while($row = $stmt->fetch()) {
    echo "id:" . str_pad($row['id'], 2, '0', STR_PAD_LEFT) . ", name:" . $row['name'] . "\n";
  }
  echo "</pre>";
} catch(PDOException $e) {
  throw new PDOException($e->getMessage(), (int)$e->getCode());
}

?>

<div class="container">
  <div id="chart"></div>
</div>

<?php include 'templates/footer.php'; ?>