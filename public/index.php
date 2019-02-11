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
  <div class="tile is-ancestor">
    <div class="tile is-vertical">
      <div class="tile is-parent is-vertical">
<?php
  for($i = 0; $i < 10; $i++) {
    echo "<article class='tile is-child'>";
    echo "<div id='chart-$i'></div>";
    echo "</article>";
  }
?>
      </div>
    </div>
  </div>
</div>

<?php include 'templates/footer.php'; ?>