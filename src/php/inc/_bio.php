<div class="text-center">
  <img src="<?php echoImgPath('biopic.jpg') ?>" class="img-fluid mb-4" alt="<?php echo TRANSLATIONS['bio_pic_alt'] ?>">
</div>
<?php require_once('./inc/'.TRANSLATIONS['bio']) ?>

<div class="modal fade js-modal js-letters-modal" id="letters-modal" tabindex="-1" aria-labelledby="letters-modal-title" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="letters-modal-title">
          <?php echo TRANSLATIONS['letters'] ?>
        </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?php echo TRANSLATIONS['close'] ?>">
        </button>
      </div>
      <div class="modal-body">
        <div id="letters-modal-carousel" class="carousel carousel-dark slide js-letters-modal-carousel" data-bs-interval="false">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#letters-modal-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="<?php echo TRANSLATIONS['letter_from'] ?> Arq. Ramón González Almeida">
            </button>
            <button type="button" data-bs-target="#letters-modal-carousel" data-bs-slide-to="1" aria-label="<?php echo TRANSLATIONS['letter_from'] ?> Arq. Raúl Sichero">
            </button>
            <button type="button" data-bs-target="#letters-modal-carousel" data-bs-slide-to="2" aria-label="<?php echo TRANSLATIONS['letter_from'] ?> Arq. Luis García Pardo">
            </button>
            <button type="button" data-bs-target="#letters-modal-carousel" data-bs-slide-to="3" aria-label="<?php echo TRANSLATIONS['letter_from'] ?> Leonel Viera">
            </button>
            <button type="button" data-bs-target="#letters-modal-carousel" data-bs-slide-to="4" aria-label="<?php echo TRANSLATIONS['letter_from'] ?> Arq. Don Alberto Muñóz del Campo">
            </button>
            <button type="button" data-bs-target="#letters-modal-carousel" data-bs-slide-to="5" aria-label="<?php echo TRANSLATIONS['letter_from'] ?> Arq. Ricardo Saxlund">
            </button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active mb-4">
              <img src="<?php echoImgPath('cartas/gonzalezAlmeida.jpg') ?>" class="d-block w-100" alt="<?php echo TRANSLATIONS['letter_from'] ?> Arq. Ramón González Almeida">
              <h5 class="text-center mb-4">
                Arq. Ramón González Almeida
              </h5>
            </div>
            <div class="carousel-item mb-4">
              <img src="<?php echoImgPath('cartas/sichero.jpg') ?>" class="d-block w-100" alt="<?php echo TRANSLATIONS['letter_from'] ?> Arq. Raúl Sichero">
              <h5 class="text-center mb-4">
                Arq. Raúl Sichero
              </h5>
            </div>
            <div class="carousel-item mb-4">
              <img src="<?php echoImgPath('cartas/garciaPardo.jpg') ?>" class="d-block w-100" alt="<?php echo TRANSLATIONS['letter_from'] ?> Arq. Luis García Pardo">
              <h5 class="text-center mb-4">
                Arq. Luis García Pardo
              </h5>
            </div>
            <div class="carousel-item mb-4">
              <img src="<?php echoImgPath('cartas/viera.jpg') ?>" class="d-block w-100" alt="<?php echo TRANSLATIONS['letter_from'] ?> Leonel Viera">
              <h5 class="text-center mb-4">
                Leonel Viera
              </h5>
            </div>
            <div class="carousel-item mb-4">
              <img src="<?php echoImgPath('cartas/munozdelCampo.jpg') ?>" class="d-block w-100" alt="<?php echo TRANSLATIONS['letter_from'] ?> Arq. Don Alberto Muñóz del Campo">
              <h5 class="text-center mb-4">
                Arq. Don Alberto Muñóz del Campo
              </h5>
            </div>
            <div class="carousel-item mb-4">
              <img src="<?php echoImgPath('cartas/ricardoSaxlund.jpg') ?>" class="d-block w-100" alt="<?php echo TRANSLATIONS['letter_from'] ?> Arq. Ricardo Saxlund">
              <h5 class="text-center mb-4">
                Arq. Ricardo Saxlund
              </h5>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#letters-modal-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">
              <?php echo TRANSLATIONS['previous'] ?>
            </span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#letters-modal-carousel" data-bs-slide="next">
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
