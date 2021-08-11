<header class="mb-4">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <h1 class="h5 mb-0">
          <?php echo TRANSLATIONS['main_title'] ?>
        </h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-main" aria-controls="nav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav-main">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link <?php if ($uri === 'inicio') echo 'active'; ?>" <?php if ($uri === 'inicio') echo 'aria-current="page"'; ?> href="/?lang=<?php echo $lang ?>">
              <?php echo TRANSLATIONS['link_biography'] ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($uri === 'personal') echo 'active'; ?>" <?php if ($uri === 'personal') echo 'aria-current="page"'; ?> href="/personal?lang=<?php echo $lang ?>">
              <?php echo TRANSLATIONS['link_personal'] ?>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo TRANSLATIONS['href_language'] ?>">
              <?php echo TRANSLATIONS['link_language'] ?>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
