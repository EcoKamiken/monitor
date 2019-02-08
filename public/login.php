<?php include "templates/header.php"; ?>

  <div class="container mt mb">
    <div class="columns">
      <div class="column is-8">
        <form class="is-centering" action="auth.php" method='post'>
          <div class="field">
            <div class="control has-icons-left">
              <input class="input" type="text" placeholder="Username">
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>
            </div>
          </div>

          <div class="field">
            <div class="control has-icons-left">
              <input class="input" type="password" placeholder="Password">
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