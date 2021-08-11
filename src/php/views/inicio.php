<div class="container">
  <div class="row">
    <div class="col-12">
    </div>
    <div class="col-12 col-md-8">
      <h2 class="display-2 text-center mb-4">
        <?php echo TRANSLATIONS['biography'] ?>
      </h2>
      <div class="text-center">
        <img src="<?php echoImgPath('biopic.jpg') ?>" class="img-fluid mb-4" alt="<?php echo TRANSLATIONS['bio_pic_alt'] ?>">
      </div>
      <?php require_once('./inc/'.TRANSLATIONS['bio']) ?>
    </div>
    <div class="col-12 col-md-4">
      <h2 class="display-2 text-center mb-4">
        <?php echo TRANSLATIONS['projects'] ?>
      </h2>
      <?php require_once('./inc/_projects.php') ?>
    </div>
  </div>
</div>
