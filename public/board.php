<?php include 'templates/header.php'; ?>

  <main class="main">
    <div class="container mt mb">
      <div class="notification">
        <button class="button is-primary">
          + Add Topic
        </button>
      </div>

      <div class="field">
        <label class="label"></label>
        <div class="control">
          <input id="topicFilterInput" class="input" type="text" onkeyup="topicFilter()" placeholder="Search....">
        </div>
      </div>

      <table id="topicTable" class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Check</th>
            <th>Headding</th>
          </tr>
          <tbody>
<?php
  for($i = 0; $i < 10; $i++) {
?>
            <tr>
              <th><?php echo $i; ?></th>
              <td><input type="checkbox"></td>
              <td><a>https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA</a></td>
            </tr>
<?php
  }
?>
          </tbody>
        </thead>
      </table>
    </div>
  </main>

<?php include 'templates/footer.php'; ?>