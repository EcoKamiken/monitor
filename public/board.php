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

      <section class="section">
        <h2>List</h2>
        <p>.</p>
      </section>

    </div>
  </main>

<?php include 'templates/footer.php'; ?>