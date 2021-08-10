<?php if (!isset($active)) $active = 0; ?>

<header class="mb-4">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        Arquitecto Rodolfo López Rey
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-main" aria-controls="nav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?php if ($active === 0) echo 'active'; ?>" <?php if ($active === 0) echo 'aria-current="page"'; ?> href="/">
              Biografía y obras
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($active === 1) echo 'active'; ?>" <?php if ($active === 1) echo 'aria-current="page"'; ?> href="/fotos-personales">
              Fotos personales
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($active === 1) echo 'active'; ?>" <?php if ($active === 2) echo 'aria-current="page"'; ?> href="/">
              English version
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
