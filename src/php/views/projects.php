<div class="container">
  <div class="row">
    <div class="col-12">
      <h2 class="display-2 text-center mb-4">
        <?php echo TRANSLATIONS['projects'] ?>
      </h2>
    </div>
    <?php foreach ($projects as $prefix => $project): ?>
      <div class="col-8 offset-2 offset-sm-0 col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-4">
        <a class="card shadow-sm h-100 text-decoration-none text-reset js-project" href="#" data-project-prefix="<?php echo $prefix ?>">
          <div class="card-img-top card-photo" style="background-image: url(<?php echoImgPath('gallery/'.$prefix.'_small_01.jpg') ?>)">
          </div>
          <div class="card-body text-center">
            <h3 id="project-title-<?php echo $prefix ?>" class="card-title project__name h6">
              <?php echo $project['name'] ?>
            </h3>
            <p class="card-text project__location">
              (<?php echo $project['location'] ?>)
            </p>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?php require_once('./inc/_projects-modal.php') ?>
