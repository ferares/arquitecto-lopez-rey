<div class="container">
  <div class="row">
    <div class="col-12">
    </div>
    <div class="col-12 col-md-6 col-xl-8 biography js-biography">
      <h2 class="display-2 text-center mb-4">
        <?php echo TRANSLATIONS['biography'] ?>
      </h2>
      <?php require_once('./inc/_bio.php') ?>
    </div>
    <div class="col-6 offset-3 col-md-4 offset-md-1 col-xl-2 offset-xl-1 projects js-projects">
      <h2 class="display-2 text-center mb-4">
        <?php echo TRANSLATIONS['projects'] ?>
      </h2>
      <?php require_once('./inc/_projects.php') ?>
    </div>
  </div>
</div>
