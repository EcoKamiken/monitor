<?php include "templates/header.php"; ?>

  <div class="container mt mb">
    <div class="columns">
      <div class="column">
        <form class="is-centering" action="auth.php" method='post'>

          <div class="field">
            <div class="control has-icons-left">
              <input class="input" type="text" name="username" placeholder="Username" required>
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>
            </div>
          </div>

          <div class="field">
            <div class="control has-icons-left">
              <input class="input" type="password" name="password" placeholder="Password" required>
              <span class="icon is-small is-left">
                <i class="fas fa-key"></i>
              </span>
            </div>
          </div>

          <button class="button is-info">Login</button>
        </form>
      </div>
    </div>
  </div>

<?php include "templates/footer.php"; ?>