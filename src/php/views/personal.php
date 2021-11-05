<?php
$photos = [];
foreach ($pictures as $i => $picture) {
  $index = ($i + 1);
  if ($index < 10) {
    $index = "0$index";
  }
  $photos[] = array(
    'title' => $picture,
    'small' => "gallery/personal/Personal_small_$index.jpg",
    'big' => "gallery/personal/Personal_big_$index.jpg",
  );
}
?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="display-2 text-center mb-4">
        <?php echo TRANSLATIONS['personal_header'] ?>
      </h1>
    </div>
    <?php foreach ($photos as $index => $photo): ?>
      <div class="col-8 offset-2 offset-sm-0 col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-4">
        <a class="card shadow-sm h-100 js-personal-photo text-decoration-none text-reset" href="#" data-personal-index="<?php echo $index ?>">
          <?php $index++; if ($index < 10) { $index = "0$index"; } ?>
          <div class="card-img-top card-photo" style="background-image: url(<?php echoImgPath($photo['small']) ?>)">
          </div>
          <div class="card-body d-flex align-items-end text-center">
            <h2 id="personal-title-<?php echo $index ?>" class="card-title h6 mx-auto">
              <?php echo $photo['title'] ?>
            </h2>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<div class="modal fade js-modal js-personal-modal" id="personal-modal" tabindex="-1" aria-labelledby="personal-modal-title" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="personal-modal-title">
          <?php echo TRANSLATIONS['link_personal'] ?>
        </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?php echo TRANSLATIONS['close'] ?>">
        </button>
      </div>
      <div class="modal-body">
        <div id="personal-modal-carousel" class="carousel slide js-personal-modal-carousel" data-bs-interval="false">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#personal-modal-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="<?php echo TRANSLATIONS['photo'] ?> 1"></button>
            <?php for ($i = 1; $i < count($photos); $i++) : ?>
              <button type="button" data-bs-target="#personal-modal-carousel" data-bs-slide-to="<?php echo $i ?>" aria-label="<?php echo TRANSLATIONS['photo'] ?> <?php echo ($i + 1) ?>">
              </button>
            <?php endfor; ?>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php echoImgPath($photos[0]['big']) ?>" class="d-block w-100" aria-labelledby="item-label-0">
              <div class="carousel-caption d-none d-md-block">
                <h5 id="item-label-0">
                  <?php echo $photos[0]['title'] ?>
                </h5>
              </div>
            </div>
            <?php for ($i = 1; $i < count($photos); $i++) : ?>
              <div class="carousel-item">
                <img src="<?php echoImgPath($photos[$i]['big']) ?>" class="d-block w-100" aria-labelledby="item-label-<?php echo $i ?>">
                <div class="carousel-caption d-none d-md-block">
                  <h5 id="item-label-<?php echo $i ?>">
                    <?php echo $photos[$i]['title'] ?>
                  </h5>
                </div>
              </div>
            <?php endfor; ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#personal-modal-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">
              <?php echo TRANSLATIONS['previous'] ?>
            </span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#personal-modal-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">
              <?php echo TRANSLATIONS['next'] ?>
            </span>
          </button>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary js-modal-fullscreen">
          <span class="modal__fullscreen modal__fullscreen--enlarge">
            <?php echo TRANSLATIONS['enlarge'] ?>
          </span>
          <span class="modal__fullscreen modal__fullscreen--reduce">
            <?php echo TRANSLATIONS['reduce'] ?>
          </span>
        </button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          <?php echo TRANSLATIONS['close'] ?>
        </button>
      </div>
    </div>
  </div>
</div>
