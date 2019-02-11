<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Portal</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="/">
        <h1>Portal</h1>
      </a>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasic">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasic" class="navbar-menu">
      <div class="navbar-start">

        <a class="navbar-item" href="/">
          <span class="icon has-text-primary">
            <i class="fas fa-home"></i>
          </span>
          <span>
            Home
          </span>
        </a>

        <a class="navbar-item" href="/board.php">
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
            <a class="button is-light" href="/login.php">
              Login
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>