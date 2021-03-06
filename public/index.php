<?php include 'templates/header.php'; ?>

  <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://kamiken.info">
        <h1>Kamiken Portal</h1>
      </a>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasic">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasic" class="navbar-menu">
      <div class="navbar-start">

        <a class="navbar-item">
          <span class="icon has-text-primary">
            <i class="fas fa-home"></i>
          </span>
          <span>
            Home
          </span>
        </a>

        <a class="navbar-item">
          <span class="icon has-text-primary">
            <i class="fas fa-clipboard-list"></i>
          </span>
          <span>
            Board
          </span>
        </a>

        <a class="navbar-item">
          <span class="icon has-text-primary">
            <i class="fas fa-users"></i>
          </span>
          <span>
            Member
          </span>
        </a>

        <a class="navbar-item">
          <span class="icon has-text-primary">
            <i class="fas fa-link"></i>
          </span>
          <span>
            Link
          </span>
        </a>

      </div>
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-primary">
              <strong>Sign up</strong>
            </a>
            <a class="button is-light">
              Login
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>


  <main class="bd-main">
    <div class="container mt mb">
      <div class="notification">
        <ul>
          <li><a>Topic 1 - Sample</a></li>
          <li><a>Topic 2 - Sample</a></li>
          <li><a>Topic 3 - Sample</a></li>
        </ul>
      </div>
    </div>

    <div class="container mb">
      <div class="responsiveCal">
        <iframe src="https://calendar.google.com/calendar/b/1/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=kamiken.nippou%40gmail.com&amp;color=%231B887A&amp;src=uimkhveob9700qr481sg4iaq6k%40group.calendar.google.com&amp;color=%238C500B&amp;src=qc8uva27f9ioulqa1o58it85vc%40group.calendar.google.com&amp;color=%2323164E&amp;src=59ctgammsrd9d1hllsgvs44sj0%40group.calendar.google.com&amp;color=%231B887A&amp;src=ciov8oa1k92q5lg0visc0fqn08%40group.calendar.google.com&amp;color=%23AB8B00&amp;ctz=Asia%2FTokyo" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
      </div>
    </div>
  </main>

<?php include 'templates/footer.php'; ?>