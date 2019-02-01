<?php include 'templates/header.php'; ?>

  <main class="main">
    <div class="container mt mb">
      <div class="notification">
        <button class="button is-primary">
          + Add Topic
        </button>
      </div>

      <section class="section">
        <h2>Post</h2>
        <form action="" method="post">
          Title: <input type="text" name="title" value=""><br>
          Body: <input type="text" name="body" value=""><br>
          <button type="submit">Post</button>
        </form>
      </section>

      <div class="field">
        <label class="label"></label>
        <div class="control">
          <input id="topicFilterInput" class="input" type="text" onkeyup="topicFilter()" placeholder="Search....">
        </div>
      </div>

      <table id="topicTable" class="table is-striped">
        <thead>
          <tr>
            <th>Post_ID</th>
            <th>Check</th>
            <th>Title</th>
            <th>Like</th>
          </tr>
          <tbody>
<?php
  class topicData {
    
  }
  for($i = 0; $i < 13; $i++) {
?>
            <tr>
              <th class="has-text-centered"><?php echo $i; ?></th>
              <td class="has-text-centered"><input type="checkbox"></td>
              <td><a>Topic title, topic title, topoic title.</a></td>
              <td>10</td>
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