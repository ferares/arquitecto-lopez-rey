<?php
$photos = [];
for ($i = 0; $i < $project['imgCount']; $i++) {
  $index = ($i + 1);
  if ($index < 10) {
    $index = "0$index";
  }
  $photos[] = "gallery/$project[prefix]_big_$index.jpg";
}
?>

<div id="projects-modal-carousel" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#projects-modal-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Foto 1"></button>
    <?php for ($i = 1; $i < count($photos); $i++) : ?>
      <button type="button" data-bs-target="#projects-modal-carousel" data-bs-slide-to="<?php echo $i ?>" aria-label="Foto <?php echo ($i + 1) ?>">
      </button>
    <?php endfor; ?>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echoImgPath($photos[0]) ?>" class="d-block w-100" alt="<?php echo $project['name'] ?> foto <?php echo 1 ?>">
    </div>
    <?php for ($i = 1; $i < count($photos); $i++) : ?>
      <div class="carousel-item">
        <img src="<?php echoImgPath($photos[$i]) ?>" class="d-block w-100" alt="<?php echo $project['name'] ?> foto <?php echo $i + 1 ?>">
      </div>
    <?php endfor; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#projects-modal-carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">
      <?php echo TRANSLATIONS['previous'] ?>
    </span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#projects-modal-carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">
      <?php echo TRANSLATIONS['next'] ?>
    </span>
  </button>
</div>
